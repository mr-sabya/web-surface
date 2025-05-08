<?php

namespace App\Livewire\Backend\ServiceFeature;

use App\Models\ServiceFeature;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithFileUploads;

    public $serviceId;
    public $title, $text, $icon, $oldIcon;
    public $serviceFeatureId = null;
    public $perPage = 10;
    public $search = '';

    protected $rules = [
        'title' => 'required|string|max:255',
        'text' => 'required|string|max:500',
        'icon' => 'nullable|image|max:1024', // updated
    ];

    public function mount($serviceId)
    {
        $this->serviceId = $serviceId;
    }

    public function resetForm()
    {
        $this->reset(['serviceFeatureId', 'title', 'text', 'icon', 'oldIcon']);
    }

    public function save()
    {
        $this->validate();

        $path = $this->icon ? $this->icon->store('service_features', 'public') : $this->oldIcon;

        ServiceFeature::updateOrCreate(
            ['id' => $this->serviceFeatureId],
            [
                'service_id' => $this->serviceId,
                'title' => $this->title,
                'text' => $this->text,
                'icon' => $path,
            ]
        );

        $this->resetForm();
        session()->flash('success', 'Service Feature saved successfully.');
    }

    public function edit($id)
    {
        $feature = ServiceFeature::findOrFail($id);
        $this->serviceFeatureId = $feature->id;
        $this->title = $feature->title;
        $this->text = $feature->text;
        $this->oldIcon  = $feature->icon;
    }


    public function delete($id)
    {
        ServiceFeature::findOrFail($id)->delete();
        session()->flash('success', 'Feature deleted.');
    }


    public function render()
    {
        $features = ServiceFeature::where('service_id', $this->serviceId)
            ->where(function ($query) {
                $query->where('title', 'like', "%{$this->search}%")
                    ->orWhere('text', 'like', "%{$this->search}%");
            })
            ->latest()
            ->paginate($this->perPage);

        return view('livewire.backend.service-feature.index', compact('features'));
    }
}
