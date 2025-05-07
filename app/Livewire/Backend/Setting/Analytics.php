<?php

namespace App\Livewire\Backend\Setting;

use App\Models\Setting;
use Livewire\Component;

class Analytics extends Component
{
    public $google_analytics_id;
    public $keywords;
    public $seo_title;

    public function mount()
    {
        $setting = Setting::first();
        $this->google_analytics_id = $setting->google_analytics_id;
        $this->keywords = $setting->keywords;
        $this->seo_title = $setting->seo_title;
    }

    public function save()
    {
        $this->validate([
            'google_analytics_id' => 'nullable|string|max:255',
            'keywords' => 'nullable|string|max:255',
            'seo_title' => 'nullable|string|max:255',
        ]);

        $setting = Setting::first();
        $setting->update([
            'google_analytics_id' => $this->google_analytics_id,
            'keywords' => $this->keywords,
            'seo_title' => $this->seo_title,
        ]);

        session()->flash('message', 'SEO & Analytics settings updated successfully!');
    }


    public function render()
    {
        return view('livewire.backend.setting.analytics');
    }
}
