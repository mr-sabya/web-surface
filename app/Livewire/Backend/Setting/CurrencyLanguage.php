<?php

namespace App\Livewire\Backend\Setting;

use App\Models\Setting;
use DateTimeZone;
use Livewire\Component;

class CurrencyLanguage extends Component
{
    public $currency_symbol;
    public $language;
    public $timezone;

    public $currencyOptions = ['$', '€', '₹', '£', '¥'];
    public $languageOptions = ['English', 'Spanish', 'French', 'German', 'Hindi'];
    public $timezoneOptions = [];

    public function mount()
    {
        $setting = Setting::first();

        $this->currency_symbol = $setting->currency_symbol;
        $this->language = $setting->language;
        $this->timezone = $setting->timezone;

        $this->timezoneOptions = DateTimeZone::listIdentifiers();
    }

    public function save()
    {
        $this->validate([
            'currency_symbol' => 'nullable|string|max:10',
            'language' => 'nullable|string|max:50',
            'timezone' => 'nullable|string|max:100',
        ]);

        Setting::first()->update([
            'currency_symbol' => $this->currency_symbol,
            'language' => $this->language,
            'timezone' => $this->timezone,
        ]);

        session()->flash('message', 'Currency & Language settings updated successfully!');
    }

    public function render()
    {
        return view('livewire.backend.setting.currency-language');
    }
}
