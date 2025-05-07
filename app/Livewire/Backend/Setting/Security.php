<?php

namespace App\Livewire\Backend\Setting;

use App\Models\Setting;
use Livewire\Component;

class Security extends Component
{
    public $two_factor_auth_enabled = false;
    public $max_failed_login_attempts;

    public function mount()
    {
        $setting = Setting::first();

        $this->two_factor_auth_enabled = $setting->two_factor_auth_enabled;
        $this->max_failed_login_attempts = $setting->max_failed_login_attempts;
    }

    public function save()
    {
        $this->validate([
            'two_factor_auth_enabled' => 'boolean',
            'max_failed_login_attempts' => 'required|integer|min:1',
        ]);

        Setting::first()->update([
            'two_factor_auth_enabled' => $this->two_factor_auth_enabled,
            'max_failed_login_attempts' => $this->max_failed_login_attempts,
        ]);

        session()->flash('message', 'Security settings updated successfully!');
    }
    public function render()
    {
        return view('livewire.backend.setting.security');
    }
}
