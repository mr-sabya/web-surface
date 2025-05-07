<?php

namespace App\Livewire\Backend\Service;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';
    public $sortField = 'id';
    public $sortDirection = 'desc';
    public $perPage = 10;

    public function sortBy($field)
    {
        $this->sortDirection = $this->sortField === $field && $this->sortDirection === 'asc' ? 'desc' : 'asc';
        $this->sortField = $field;
    }

    public function delete($id)
    {
        Service::findOrFail($id)->delete();
        $this->dispatchBrowserEvent('toast', ['message' => 'Service deleted']);
    }

    public function render()
    {
        $services = Service::where('title', 'like', '%' . $this->search . '%')
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate($this->perPage);

        return view('livewire.backend.service.index', compact('services'));
    }

}
