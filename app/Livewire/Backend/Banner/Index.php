<?php

namespace App\Livewire\Backend\Banner;

use App\Models\Banner;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{

    use WithFileUploads;

    public $banner;

    public $heading;
    public $paragraph;
    public $video_link;
    public $image;
    public $image_preview;
    public $btn_text;
    public $btn_link;

    public function mount()
    {
        $this->banner = Banner::first();

        if ($this->banner) {
            $this->heading = $this->banner->heading;
            $this->paragraph = $this->banner->paragraph;
            $this->video_link = $this->banner->video_link;
            $this->image_preview = $this->banner->image;
            $this->btn_text = $this->banner->btn_text;
            $this->btn_link = $this->banner->btn_link;
        }
    }

    public function save()
    {
        $validated = $this->validate([
            'heading' => 'required|string',
            'paragraph' => 'required|string',
            'video_link' => 'nullable|string',
            'btn_text' => 'nullable|string',
            'btn_link' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($this->image) {
            $path = $this->image->store('banners', 'public');
        } else {
            $path = $this->image_preview;
        }

        if ($this->banner) {
            $this->banner->update([
                'heading' => $this->heading,
                'paragraph' => $this->paragraph,
                'video_link' => $this->video_link,
                'image' => $path,
                'btn_text' => $this->btn_text,
                'btn_link' => $this->btn_link,
            ]);
        } else {
            Banner::create([
                'heading' => $this->heading,
                'paragraph' => $this->paragraph,
                'video_link' => $this->video_link,
                'image' => $path,
                'btn_text' => $this->btn_text,
                'btn_link' => $this->btn_link,
            ]);
        }

        session()->flash('message', 'Banner updated successfully.');
    }

    
    public function render()
    {
        return view('livewire.backend.banner.index');
    }
}
