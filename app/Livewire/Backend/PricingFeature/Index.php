<?php

namespace App\Livewire\Backend\PricingFeature;

use App\Models\PricingFeature;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $pricingId;
    public $text;
    public $featureIdBeingUpdated = null;
    public $search = '';
    public $perPage = 10;

    public function mount($pricingId)
    {
        $this->pricingId = $pricingId;
    }

    public function save()
    {
        $this->validate([
            'text' => 'required|string|max:255',
        ]);

        if ($this->featureIdBeingUpdated) {
            $feature = PricingFeature::findOrFail($this->featureIdBeingUpdated);
            $feature->update([
                'text' => $this->text,
            ]);
        } else {
            PricingFeature::create([
                'pricing_id' => $this->pricingId,
                'text' => $this->text,
            ]);
        }

        $this->resetFields();
    }

    public function edit($id)
    {
        $feature = PricingFeature::findOrFail($id);
        $this->featureIdBeingUpdated = $feature->id;
        $this->text = $feature->text;
    }

    public function resetFields()
    {
        $this->text = '';
        $this->featureIdBeingUpdated = null;
    }

    public function delete($id)
    {
        PricingFeature::destroy($id);
    }

    public function render()
    {
        $features = PricingFeature::where('pricing_id', $this->pricingId)
            ->where('text', 'like', "%{$this->search}%")
            ->latest()
            ->paginate($this->perPage);

        return view('livewire.backend.pricing-feature.index', compact('features'));
    }
}
