<?php

namespace App\Livewire\Frontend\Home\Clients;

use App\Models\Client;
use App\Models\OurClientSection;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        // Fetch all clients from the database
        $clients = Client::latest()->get();

        // client section
        $client_section = OurClientSection::first();

        // Pass the clients to the view
        return view('livewire.frontend.home.clients.index', [
            'clients' => $clients,
            'client_section' => $client_section,
        ]);
    }
}