<?php

namespace App\Livewire\Backend\Setting;

use App\Models\Setting;
use Livewire\Component;
use Livewire\WithFileUploads;

class General extends Component
{
    use WithFileUploads;

    public $site_title, $tagline, $email, $phone, $address;
    public $logo, $white_logo, $favicon;
    public $logo_preview, $white_logo_preview, $favicon_preview;

    public function mount()
    {
        $setting = Setting::find(1);
        $this->site_title = $setting->site_title;
        $this->tagline = $setting->tagline;
        $this->email = $setting->email;
        $this->phone = $setting->phone;
        $this->address = $setting->address;
        $this->logo_preview = $setting->logo;
        $this->white_logo_preview = $setting->white_logo;
        $this->favicon_preview = $setting->favicon;
    }

    public function save()
    {
        $this->validate([
            'site_title' => 'required|string|max:255',
            'tagline' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'logo' => 'nullable|image|max:1024',
            'white_logo' => 'nullable|image|max:1024',
            'favicon' => 'nullable|image|max:1024',
        ]);

        $setting = Setting::find(1);
        $setting->site_title = $this->site_title;
        $setting->tagline = $this->tagline;
        $setting->email = $this->email;
        $setting->phone = $this->phone;
        $setting->address = $this->address;

        if ($this->logo) {
            $setting->logo = $this->logo->store('logos', 'public');
        }
        if ($this->white_logo) {
            $setting->white_logo = $this->white_logo->store('logos', 'public');
        }
        if ($this->favicon) {
            $setting->favicon = $this->favicon->store('logos', 'public');
        }

        $setting->save();

        session()->flash('message', 'General settings updated successfully!');
    }



    public function render()
    {
        return view('livewire.backend.setting.general');
    }
}
