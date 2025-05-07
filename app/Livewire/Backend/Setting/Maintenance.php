<?php

namespace App\Livewire\Backend\Setting;

use App\Models\Setting;
use Livewire\Component;

class Maintenance extends Component
{
    public $maintanace_mode;
    public $maintanace_message;

    public function mount()
    {
        $setting = Setting::first();
        $this->maintanace_mode = $setting->maintanace_mode;
        $this->maintanace_message = $setting->maintanace_message;
    }

    public function save()
    {
        $this->validate([
            'maintanace_mode' => 'required|boolean',
            'maintanace_message' => 'nullable|string|max:500',
        ]);

        $setting = Setting::first();
        $setting->update([
            'maintanace_mode' => $this->maintanace_mode,
            'maintanace_message' => $this->maintanace_message,
        ]);

        session()->flash('message', 'Maintenance settings updated successfully!');
    }
    
    public function render()
    {
        return view('livewire.backend.setting.maintenance');
    }
}
