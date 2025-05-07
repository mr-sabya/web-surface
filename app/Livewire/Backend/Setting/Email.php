<?php

namespace App\Livewire\Backend\Setting;

use App\Models\Setting;
use Livewire\Component;

class Email extends Component
{
    public $smtp_host;
    public $smtp_port;
    public $smtp_username;
    public $smtp_password;

    public function mount()
    {
        $setting = Setting::first();

        $this->smtp_host = $setting->smtp_host;
        $this->smtp_port = $setting->smtp_port;
        $this->smtp_username = $setting->smtp_username;
        $this->smtp_password = $setting->smtp_password;
    }

    public function save()
    {
        $this->validate([
            'smtp_host' => 'required|string|max:255',
            'smtp_port' => 'required|numeric',
            'smtp_username' => 'required|string|max:255',
            'smtp_password' => 'required|string|max:255',
        ]);

        Setting::first()->update([
            'smtp_host' => $this->smtp_host,
            'smtp_port' => $this->smtp_port,
            'smtp_username' => $this->smtp_username,
            'smtp_password' => $this->smtp_password,
        ]);

        session()->flash('message', 'Email (SMTP) settings updated successfully!');
    }
    
    public function render()
    {
        return view('livewire.backend.setting.email');
    }
}
