<?php

namespace App\Livewire\Backend\Philosophy;

use App\Models\Philosophy;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithFileUploads;

    public $title, $sub_title, $text, $image, $imagePreview;
    public $philosophyId;
    public $deletePhilosophyId = null;

    public $search = '';
    public $sortField = 'id';
    public $sortDirection = 'asc';

    protected function rules()
    {
        $rules = [
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'text' => 'required|string',
            'image' => 'nullable|image|max:1024',
        ];

        if (!$this->philosophyId) {
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
            $imagePath = $this->image->store('philosophies', 'public');
        }

        $data = [
            'title' => $this->title,
            'sub_title' => $this->sub_title,
            'text' => $this->text,
        ];

        if ($imagePath) {
            $data['image'] = $imagePath;
        }

        Philosophy::updateOrCreate(['id' => $this->philosophyId], $data);

        session()->flash('message', $this->philosophyId ? 'Philosophy updated successfully.' : 'Philosophy created successfully.');

        $this->resetForm();
    }

    public function editPhilosophy($id)
    {
        $philosophy = Philosophy::findOrFail($id);
        $this->philosophyId = $philosophy->id;
        $this->title = $philosophy->title;
        $this->sub_title = $philosophy->sub_title;
        $this->text = $philosophy->text;
        $this->imagePreview = $philosophy->image;
        $this->image = null;
    }

    public function confirmDelete($id)
    {
        $this->deletePhilosophyId = $id;
        $this->dispatch('show-delete-modal');
    }

    public function deletePhilosophy()
    {
        $philosophy = Philosophy::find($this->deletePhilosophyId);
        if ($philosophy) {
            if ($philosophy->image) {
                Storage::disk('public')->delete($philosophy->image);
            }
            $philosophy->delete();
            session()->flash('message', 'Philosophy deleted successfully.');
        }
        $this->resetDeleteModal();
    }

    public function resetDeleteModal()
    {
        $this->deletePhilosophyId = null;
        $this->dispatch('close-delete-modal');
    }

    public function resetForm()
    {
        $this->title = '';
        $this->sub_title = '';
        $this->text = '';
        $this->image = null;
        $this->imagePreview = null;
        $this->philosophyId = null;
    }

    public function render()
    {
        $philosophies = Philosophy::query()
            ->where('title', 'like', '%' . $this->search . '%')
            ->orWhere('sub_title', 'like', '%' . $this->search . '%')
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);

        return view('livewire.backend.philosophy.index', compact('philosophies'));
    }
}
