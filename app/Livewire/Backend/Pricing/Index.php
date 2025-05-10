<?php

namespace App\Livewire\Backend\Pricing;

use App\Models\Pricing;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithFileUploads;

    public $serviceId;
    public $title, $sub_title, $price_start, $price_end, $duration, $icon, $oldIcon;
    public $pricingIdBeingUpdated = null;
    public $perPage = 10;
    public $search = '';

    public function mount($serviceId)
    {
        $this->serviceId = $serviceId;
    }

    public function save()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'price_start' => 'required|numeric',
            'price_end' => 'required|numeric',
            'duration' => 'required|string|max:255',
            'icon' => $this->pricingIdBeingUpdated ? 'nullable|image|max:1024' : 'required|image|max:1024',
        ]);

        $iconPath = $this->icon
            ? $this->icon->store('pricing-icons', 'public')
            : $this->oldIcon;

        if ($this->pricingIdBeingUpdated) {
            $pricing = Pricing::findOrFail($this->pricingIdBeingUpdated);
            $pricing->update([
                'title' => $this->title,
                'sub_title' => $this->sub_title,
                'price_start' => $this->price_start,
                'price_end' => $this->price_end,
                'duration' => $this->duration,
                'icon' => $iconPath,
            ]);
        } else {
            Pricing::create([
                'title' => $this->title,
                'sub_title' => $this->sub_title,
                'price_start' => $this->price_start,
                'price_end' => $this->price_end,
                'duration' => $this->duration,
                'icon' => $iconPath,
                'service_id' => $this->serviceId,
            ]);
        }

        $this->resetFields();
    }

    public function edit($id)
    {
        $pricing = Pricing::findOrFail($id);
        $this->pricingIdBeingUpdated = $id;
        $this->title = $pricing->title;
        $this->sub_title = $pricing->sub_title;
        $this->price_start = $pricing->price_start;
        $this->price_end = $pricing->price_end;
        $this->duration = $pricing->duration;
        $this->oldIcon = $pricing->icon;
    }

    public function resetFields()
    {
        $this->title = '';
        $this->sub_title = '';
        $this->price_start = '';
        $this->price_end = '';
        $this->duration = '';
        $this->icon = null;
        $this->oldIcon = null;
        $this->pricingIdBeingUpdated = null;
    }

    public function delete($id)
    {
        Pricing::destroy($id);
    }

    public function render()
    {
        $pricings = Pricing::where('service_id', $this->serviceId)
            ->where(function ($query) {
                $query->where('title', 'like', "%{$this->search}%")
                    ->orWhere('sub_title', 'like', "%{$this->search}%")
                    ->orWhere('price_start', 'like', "%{$this->search}%")
                    ->orWhere('price_end', 'like', "%{$this->search}%");
            })
            ->latest()
            ->paginate($this->perPage);

        return view('livewire.backend.pricing.index', compact('pricings'));
    }
}
