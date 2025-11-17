<?php

namespace App\Livewire\Backend\Office;

use App\Models\Office;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithFileUploads;

    public $country, $office_type, $address, $email, $phone, $image, $order, $officeId, $imagePreview;
    public $search = '';
    public $deleteOfficeId = null;
    public $sortField = 'order', $sortDirection = 'asc';

    protected function rules()
    {
        $rules = [
            'country' => 'required|string|max:255',
            'office_type' => 'required|string|max:255',
            'address' => 'required|string',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'order' => 'required|integer',
            'image' => 'nullable|image|max:1024',
        ];

        // Image is required only when creating a new record
        if (!$this->officeId) {
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
            $imagePath = $this->image->store('office_images', 'public');
        }

        $data = [
            'country' => $this->country,
            'office_type' => $this->office_type,
            'address' => $this->address,
            'email' => $this->email,
            'phone' => $this->phone,
            'order' => $this->order,
        ];

        if ($imagePath) {
            $data['image'] = $imagePath;
        }

        Office::updateOrCreate(['id' => $this->officeId], $data);

        session()->flash('message', $this->officeId ? 'Office updated successfully.' : 'Office created successfully.');
        $this->resetForm();
    }

    public function editOffice($id)
    {
        $office = Office::findOrFail($id);
        $this->officeId = $office->id;
        $this->country = $office->country;
        $this->office_type = $office->office_type;
        $this->address = $office->address;
        $this->email = $office->email;
        $this->phone = $office->phone;
        $this->order = $office->order;
        $this->imagePreview = $office->image;
        $this->image = null; // Clear the file input
    }

    public function confirmDelete($id)
    {
        $this->deleteOfficeId = $id;
        $this->dispatch('show-delete-modal');
    }

    public function deleteOffice()
    {
        $office = Office::find($this->deleteOfficeId);
        if ($office) {
            if ($office->image) {
                Storage::disk('public')->delete($office->image);
            }
            $office->delete();
            session()->flash('message', 'Office deleted successfully.');
        }
        $this->resetDeleteModal();
    }

    public function resetDeleteModal()
    {
        $this->deleteOfficeId = null;
        $this->dispatch('close-delete-modal');
    }

    public function resetForm()
    {
        $this->country = '';
        $this->office_type = '';
        $this->address = '';
        $this->email = '';
        $this->phone = '';
        $this->image = null;
        $this->order = '';
        $this->officeId = null;
        $this->imagePreview = null;
    }

    public function render()
    {
        $offices = Office::query()
            ->where('country', 'like', '%' . $this->search . '%')
            ->orWhere('address', 'like', '%' . $this->search . '%')
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);

        return view('livewire.backend.office.index', compact('offices'));
    }
}