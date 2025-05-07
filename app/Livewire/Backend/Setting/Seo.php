<?php

namespace App\Livewire\Backend\Setting;

use App\Models\Setting;
use Livewire\Component;
use Livewire\WithFileUploads;

class Seo extends Component
{
    use WithFileUploads;

    public $meta_title, $meta_description, $meta_tags;
    public $og_title, $og_description, $og_image;
    public $og_image_preview;

    public function mount()
    {
        $setting = Setting::first();
        $this->meta_title = $setting->meta_title;
        $this->meta_description = $setting->meta_description;
        $this->meta_tags = $setting->meta_tags;
        $this->og_title = $setting->og_title;
        $this->og_description = $setting->og_description;
        $this->og_image_preview = $setting->og_image;
    }

    public function save()
    {
        $this->validate([
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_tags' => 'nullable|string|max:500',
            'og_title' => 'nullable|string|max:255',
            'og_description' => 'nullable|string|max:500',
            'og_image' => 'nullable|image|max:1024', // 1MB
        ]);

        $setting = Setting::first();

        if ($this->og_image) {
            $ogImagePath = $this->og_image->store('settings', 'public');
            $setting->og_image = $ogImagePath;
            $this->og_image_preview = $ogImagePath;
        }

        $setting->update([
            'meta_title' => $this->meta_title,
            'meta_description' => $this->meta_description,
            'meta_tags' => $this->meta_tags,
            'og_title' => $this->og_title,
            'og_description' => $this->og_description,
        ]);

        $setting->save();

        session()->flash('message', 'SEO Settings updated successfully!');
    }

    public function render()
    {
        return view('livewire.backend.setting.seo');
    }
}
