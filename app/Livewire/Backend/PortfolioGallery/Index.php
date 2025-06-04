<?php

namespace App\Livewire\Backend\PortfolioGallery;

use App\Models\PortfolioGallery;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithFileUploads;

    public $portfolioId;

    public $galleryId;
    public $title;
    public $image;
    public $image_alt;
    public $newImage;

    public $search = '';
    public $perPage = 10;

    protected $rules = [
        'title' => 'nullable|string|max:255',
        'image_alt' => 'nullable|string|max:255',
        'newImage' => 'nullable|image|max:2048',
    ];

    public function mount($portfolioId)
    {
        $this->portfolioId = $portfolioId;
    }

    public function save()
    {
        $this->validate();

        $path = $this->newImage ? $this->newImage->store('portfolio-galleries', 'public') : $this->image;

        PortfolioGallery::updateOrCreate(
            ['id' => $this->galleryId],
            [
                'portfolio_id' => $this->portfolioId,
                'title' => $this->title,
                'image' => $path,
                'image_alt' => $this->image_alt,
            ]
        );

        $this->resetForm();

        session()->flash('success', 'Gallery saved successfully.');
    }

    public function edit($id)
    {
        $gallery = PortfolioGallery::findOrFail($id);
        $this->galleryId = $gallery->id;
        $this->title = $gallery->title;
        $this->image = $gallery->image;
        $this->image_alt = $gallery->image_alt;
    }

    public function delete($id)
    {
        PortfolioGallery::findOrFail($id)->delete();
        session()->flash('success', 'Gallery deleted.');
    }

    public function resetForm()
    {
        $this->reset(['galleryId', 'title', 'image', 'image_alt', 'newImage']);
    }

    public function render()
    {
        $galleries = PortfolioGallery::where('portfolio_id', $this->portfolioId)
            ->where(function ($q) {
                $q->where('title', 'like', "%{$this->search}%");
            })
            ->latest()
            ->get();

        return view('livewire.backend.portfolio-gallery.index', [
            'galleries' => $galleries,
        ]);
    }

}
