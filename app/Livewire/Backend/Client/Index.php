<?php

namespace App\Livewire\Backend\Client;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithFileUploads;

    public $name, $logo, $website, $clientId, $search = '', $logoPreview;
    public $deleteClientId = null;
    public $sortField = 'name', $sortDirection = 'asc';

    protected $rules = [
        'name' => 'required|string|max:255',
        'logo' => 'nullable|image|max:1024',
        'website' => 'nullable|url|max:255',
    ];

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            // Toggle sort direction
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            // Set new sort field and default direction to ascending
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
    }

    public function save()
    {
        $this->validate();

        $logoPath = null;

        if ($this->logo) {
            $logoPath = $this->logo->store('client_logos', 'public');
        }

        $data = [
            'name' => $this->name,
            'website' => $this->website,
        ];

        if ($logoPath) {
            $data['logo'] = $logoPath;
        }

        Client::updateOrCreate(
            ['id' => $this->clientId],
            $data
        );

        session()->flash('message', $this->clientId ? 'Client updated successfully.' : 'Client created successfully.');
        $this->resetForm();
    }

    public function editClient($id)
    {
        $client = Client::find($id);
        $this->clientId = $client->id;
        $this->name = $client->name;
        $this->website = $client->website;
        $this->logoPreview = $client->logo;
    }


    public function confirmDelete($id)
    {
        $this->deleteClientId = $id;
        $this->dispatch('show-delete-modal');
    }

    public function deleteClient()
    {
        $client = Client::find($this->deleteClientId);
        if ($client) {
            $client->delete();
            session()->flash('message', 'Client deleted successfully.');
        }
        $this->resetDeleteModal();
    }

    public function resetDeleteModal()
    {
        $this->deleteClientId = null;
        $this->dispatch('close-delete-modal');
    }

    public function resetForm()
    {
        $this->name = '';
        $this->logo = '';
        $this->website = '';
        $this->clientId = null;
        $this->logoPreview = null;
    }


    public function render()
    {
        $clients = Client::query()
            ->where('name', 'like', '%' . $this->search . '%')
            ->orWhere('website', 'like', '%' . $this->search . '%')
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);

        return view('livewire.backend.client.index', compact('clients'));
    }
}
