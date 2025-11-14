<?php

namespace App\Livewire\Backend\Industry;

use App\Models\Industry;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithFileUploads;

    public $name, $icon, $order, $industryId, $search = '', $iconPreview;
    public $deleteIndustryId = null;
    public $sortField = 'order', $sortDirection = 'asc';

    protected function rules()
    {
        // Define base rules
        $rules = [
            'name' => 'required|string|max:255',
            'order' => 'required|integer',
            'icon' => 'nullable|image|max:1024',
        ];

        // The icon is required only when creating a new record
        if (!$this->industryId) {
            $rules['icon'] = 'required|image|max:1024';
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

        $iconPath = null;
        if ($this->icon) {
            $iconPath = $this->icon->store('industry_icons', 'public');
        }

        $data = [
            'name' => $this->name,
            'order' => $this->order,
        ];

        if ($iconPath) {
            $data['icon'] = $iconPath;
        }

        Industry::updateOrCreate(
            ['id' => $this->industryId],
            $data
        );

        session()->flash('message', $this->industryId ? 'Industry updated successfully.' : 'Industry created successfully.');
        $this->resetForm();
    }

    public function editIndustry($id)
    {
        $industry = Industry::findOrFail($id);
        $this->industryId = $industry->id;
        $this->name = $industry->name;
        $this->order = $industry->order;
        $this->iconPreview = $industry->icon;
        $this->icon = null; // Clear the file input
    }

    public function confirmDelete($id)
    {
        $this->deleteIndustryId = $id;
        $this->dispatch('show-delete-modal');
    }

    public function deleteIndustry()
    {
        $industry = Industry::find($this->deleteIndustryId);
        if ($industry) {
            if ($industry->icon) {
                Storage::disk('public')->delete($industry->icon);
            }
            $industry->delete();
            session()->flash('message', 'Industry deleted successfully.');
        }
        $this->resetDeleteModal();
    }

    public function resetDeleteModal()
    {
        $this->deleteIndustryId = null;
        $this->dispatch('close-delete-modal');
    }

    public function resetForm()
    {
        $this->name = '';
        $this->icon = null;
        $this->order = '';
        $this->industryId = null;
        $this->iconPreview = null;
    }

    public function render()
    {
        $industries = Industry::query()
            ->where('name', 'like', '%' . $this->search . '%')
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);

        return view('livewire.backend.industry.index', compact('industries'));
    }
}