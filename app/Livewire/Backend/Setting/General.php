<?php

namespace App\Livewire\Backend\Setting;

use App\Models\Setting;
use Livewire\Component;
use Livewire\WithFileUploads;

class General extends Component
{
    use WithFileUploads;

    public $site_title, $tagline, $email, $phone, $address;
    public $website_link, $footer_about, $copyright;       // ⬅️ NEW
    public $logo, $white_logo, $favicon;
    public $logo_preview, $white_logo_preview, $favicon_preview;

    public function mount()
    {
        $setting = Setting::first();

        // text fields
        $this->site_title    = $setting->site_title;
        $this->tagline       = $setting->tagline;
        $this->email         = $setting->email;
        $this->phone         = $setting->phone;
        $this->address       = $setting->address;
        $this->website_link  = $setting->website_link;     // ⬅️ NEW
        $this->footer_about  = $setting->footer_about;     // ⬅️ NEW
        $this->copyright     = $setting->copyright;        // ⬅️ NEW

        // images
        $this->logo_preview        = $setting->logo;
        $this->white_logo_preview  = $setting->white_logo;
        $this->favicon_preview     = $setting->favicon;
    }

    public function save()
    {
        $this->validate([
            'site_title'    => 'required|string|max:255',
            'tagline'       => 'nullable|string|max:255',
            'email'         => 'nullable|email|max:255',
            'phone'         => 'nullable|string|max:255',
            'address'       => 'nullable|string|max:255',
            'website_link'  => 'nullable|url|max:255',      // ⬅️ NEW
            'footer_about'  => 'nullable|string|max:500',   // ⬅️ NEW
            'copyright'     => 'nullable|string|max:255',   // ⬅️ NEW
            'logo'          => 'nullable|image|max:1024',
            'white_logo'    => 'nullable|image|max:1024',
            'favicon'       => 'nullable|image|max:1024',
        ]);

        $setting = Setting::first();

        // text fields
        $setting->site_title   = $this->site_title;
        $setting->tagline      = $this->tagline;
        $setting->email        = $this->email;
        $setting->phone        = $this->phone;
        $setting->address      = $this->address;
        $setting->website_link = $this->website_link;      // ⬅️ NEW
        $setting->footer_about = $this->footer_about;      // ⬅️ NEW
        $setting->copyright    = $this->copyright;         // ⬅️ NEW

        // images
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
