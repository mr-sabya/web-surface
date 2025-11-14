<?php

namespace App\Livewire\Backend\Badge;

use App\Models\Badge;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithFileUploads;

    public $title, $image, $order, $badgeId, $search = '', $imagePreview;
    public $deleteBadgeId = null;
    public $sortField = 'order', $sortDirection = 'asc';

    protected $rules = [
        'title' => 'required|string|max:255',
        'image' => 'nullable|image|max:1024', // is required when creating a new one.
        'order' => 'required|integer',
    ];

    public function updated($propertyName)
    {
        // Add a required rule for the image only when creating a new badge
        if (!$this->badgeId) {
            $this->rules['image'] = 'required|image|max:1024';
        }
        $this->validateOnly($propertyName);
    }


    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
    }

    public function save()
    {
        // Add a required rule for the image only when creating a new badge
        if (!$this->badgeId) {
            $this->rules['image'] = 'required|image|max:1024';
        }

        $this->validate();

        $imagePath = null;

        if ($this->image) {
            $imagePath = $this->image->store('badge_images', 'public');
        }

        $data = [
            'title' => $this->title,
            'order' => $this->order,
        ];

        if ($imagePath) {
            $data['image'] = $imagePath;
        }

        Badge::updateOrCreate(
            ['id' => $this->badgeId],
            $data
        );

        session()->flash('message', $this->badgeId ? 'Badge updated successfully.' : 'Badge created successfully.');
        $this->resetForm();
    }

    public function editBadge($id)
    {
        $badge = Badge::findOrFail($id);
        $this->badgeId = $badge->id;
        $this->title = $badge->title;
        $this->order = $badge->order;
        $this->imagePreview = $badge->image;
        $this->image = null; // Clear the file input
    }


    public function confirmDelete($id)
    {
        $this->deleteBadgeId = $id;
        $this->dispatch('show-delete-modal');
    }



    public function deleteBadge()
    {
        $badge = Badge::find($this->deleteBadgeId);
        if ($badge) {
            // Also delete the image from storage
            if ($badge->image) {
                Storage::disk('public')->delete($badge->image);
            }
            $badge->delete();
            session()->flash('message', 'Badge deleted successfully.');
        }
        $this->resetDeleteModal();
    }

    public function resetDeleteModal()
    {
        $this->deleteBadgeId = null;
        $this->dispatch('close-delete-modal');
    }

    public function resetForm()
    {
        $this->title = '';
        $this->image = null;
        $this->order = '';
        $this->badgeId = null;
        $this->imagePreview = null;
    }


    public function render()
    {
        $badges = Badge::query()
            ->where('title', 'like', '%' . $this->search . '%')
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);

        return view('livewire.backend.badge.index', compact('badges'));
    }
}