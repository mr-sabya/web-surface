<?php

namespace App\Livewire\Backend\ReviewPlatform;

use App\Models\ReviewPlatform;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithFileUploads;

    public $name, $image, $link, $order, $platformId, $search = '', $imagePreview;
    public $deletePlatformId = null;
    public $sortField = 'order', $sortDirection = 'asc';

    protected function rules()
    {
        $rules = [
            'name' => 'required|string|max:255',
            'link' => 'nullable|url',
            'order' => 'required|integer',
            'image' => 'nullable|image|max:1024',
        ];

        // The image is required only when creating a new record
        if (!$this->platformId) {
            $rules['image'] = 'required|image|max:1024';
        }

        return $rules;
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
        $this->validate();

        $imagePath = null;
        if ($this->image) {
            $imagePath = $this->image->store('review_platforms', 'public');
        }

        $data = [
            'name' => $this->name,
            'link' => $this->link,
            'order' => $this->order,
        ];

        if ($imagePath) {
            $data['image'] = $imagePath;
        }

        ReviewPlatform::updateOrCreate(['id' => $this->platformId], $data);

        session()->flash('message', $this->platformId ? 'Review Platform updated successfully.' : 'Review Platform created successfully.');
        $this->resetForm();
    }

    public function editPlatform($id)
    {
        $platform = ReviewPlatform::findOrFail($id);
        $this->platformId = $platform->id;
        $this->name = $platform->name;
        $this->link = $platform->link;
        $this->order = $platform->order;
        $this->imagePreview = $platform->image;
        $this->image = null; // Clear the file input
    }

    public function confirmDelete($id)
    {
        $this->deletePlatformId = $id;
        $this->dispatch('show-delete-modal');
    }

    public function deletePlatform()
    {
        $platform = ReviewPlatform::find($this->deletePlatformId);
        if ($platform) {
            if ($platform->image) {
                Storage::disk('public')->delete($platform->image);
            }
            $platform->delete();
            session()->flash('message', 'Review Platform deleted successfully.');
        }
        $this->resetDeleteModal();
    }

    public function resetDeleteModal()
    {
        $this->deletePlatformId = null;
        $this->dispatch('close-delete-modal');
    }

    public function resetForm()
    {
        $this->name = '';
        $this->image = null;
        $this->link = '';
        $this->order = '';
        $this->platformId = null;
        $this->imagePreview = null;
    }

    public function render()
    {
        $platforms = ReviewPlatform::query()
            ->where('name', 'like', '%' . $this->search . '%')
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);

        return view('livewire.backend.review-platform.index', compact('platforms'));
    }
}
