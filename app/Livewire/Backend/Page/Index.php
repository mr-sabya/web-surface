<?php

namespace App\Livewire\Backend\Page;

use App\Models\Page;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';
    public $sortField = 'id';
    public $sortAsc   = false;
    public $perPage   = 10;

    /* delete helpers */
    public $deleteId = null;

    protected function updatingSearch()
    {
        $this->resetPage();
    }

    /* sorting */
    public function sortBy($field)
    {
        $this->sortAsc   = $this->sortField === $field ? ! $this->sortAsc : true;
        $this->sortField = $field;
    }

    /* delete flow */
    public function confirmDelete($id)
    {
        $this->deleteId = $id;
        $this->dispatchBrowserEvent('show-delete');   // JS opens modal
    }

    public function destroy()
    {
        Page::findOrFail($this->deleteId)->delete();
        session()->flash('message', 'Page deleted!');
        $this->deleteId = null;
    }

    public function render()
    {
        $pages = Page::query()
            ->when(
                $this->search,
                fn($q) =>
                $q->where('title', 'like', "%{$this->search}%")
                    ->orWhere('slug', 'like', "%{$this->search}%")
            )
            ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
            ->paginate($this->perPage);

        return view('livewire.backend.page.index', compact('pages'));
    }
}
