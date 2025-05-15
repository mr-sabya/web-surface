<?php

namespace App\Livewire\Backend\Portfolio;

use App\Models\Client;
use App\Models\Portfolio;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

class Manage extends Component
{
    use WithFileUploads;

    public $portfolioId;
    public $name, $slug, $title, $short_description, $description, $created_at, $updated_at;
    public $image, $newImage;
    public $service_id, $client_id;
    public $start_date, $end_date, $url, $status = 1;

    public function mount($portfolioId = null)
    {
        $this->portfolioId = $portfolioId;

        if ($portfolioId) {
            $portfolio = Portfolio::findOrFail($portfolioId);

            $this->name = $portfolio->name;
            $this->slug = $portfolio->slug;
            $this->title = $portfolio->title;
            $this->short_description = $portfolio->short_description;
            $this->description = $portfolio->description;
            $this->image = $portfolio->image;
            $this->service_id = $portfolio->service_id;
            $this->client_id = $portfolio->client_id;
            $this->start_date = $portfolio->start_date;
            $this->end_date = $portfolio->end_date;
            $this->url = $portfolio->url;
            $this->status = $portfolio->status;
            $this->created_at = $portfolio->created_at;
            $this->updated_at = $portfolio->updated_at;
        } else {
            $this->created_at = now();
            $this->updated_at = null;
        }
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:portfolios,slug,' . $this->portfolioId,
            'title' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'service_id' => 'required',
            'client_id' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'url' => 'nullable|url',
            'newImage' => 'nullable|image|max:1024',
            'status' => 'boolean',
        ]);

        $data = [
            'name' => $this->name,
            'slug' => $this->slug,
            'title' => $this->title,
            'short_description' => $this->short_description,
            'description' => $this->description,
            'service_id' => $this->service_id,
            'client_id' => $this->client_id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'url' => $this->url,
            'status' => $this->status,
        ];

        if ($this->newImage) {
            $imagePath = $this->newImage->store('portfolios', 'public');
            $data['image'] = $imagePath;
        }

        Portfolio::updateOrCreate(['id' => $this->portfolioId], $data);

        session()->flash('message', $this->portfolioId ? 'Portfolio updated.' : 'Portfolio created.');

        $this->resetForm();

        $this->dispatch('refreshPortfolioList');
    }

    public function resetForm()
    {
        $this->portfolioId = null;
        $this->name = $this->slug = $this->title = $this->short_description = $this->description = '';
        $this->image = $this->newImage = null;
        $this->service_id = $this->client_id = null;
        $this->start_date = $this->end_date = $this->url = null;
        $this->status = 1;
    }

    public function render()
    {
        return view('livewire.backend.portfolio.manage', [
            'services' => Service::all(),
            'clients' => Client::all(),
        ]);
    }
}
