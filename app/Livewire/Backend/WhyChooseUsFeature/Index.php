<?php

namespace App\Livewire\Backend\WhyChooseUsFeature;

use App\Models\WhyChooseUsFeature;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithFileUploads;

    public $whyChooseUsId;
    public $featureId, $title, $description, $icon, $oldIcon;
    public $search = '';
    public $sortField = 'id';
    public $sortDirection = 'desc';
    public $perPage = 10;

    // Add icon to rules
    protected $rules = [
        'title' => 'required|string',
        'description' => 'nullable|string',
        'icon' => 'nullable|image|max:1024', // 1MB max
    ];

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function mount($whyChooseUsId)
    {
        $this->whyChooseUsId = $whyChooseUsId;
    }

    public function save()
    {
        $this->validate();

        $data = [
            'why_choose_us_id' => $this->whyChooseUsId,
            'title' => $this->title,
            'description' => $this->description,
        ];

        if ($this->icon) {
            if ($this->oldIcon && Storage::disk('public')->exists($this->oldIcon)) {
                Storage::disk('public')->delete($this->oldIcon);
            }
            $data['icon'] = $this->icon->store('whychooseus/icons', 'public');
        }

        WhyChooseUsFeature::updateOrCreate(
            ['id' => $this->featureId],
            $data
        );

        $this->resetForm();
        session()->flash('message', 'Feature saved successfully.');
    }

    public function edit($id)
    {
        $feature = WhyChooseUsFeature::findOrFail($id);
        $this->featureId = $feature->id;
        $this->title = $feature->title;
        $this->description = $feature->description;
        $this->oldIcon = $feature->icon;
    }

    public function delete($id)
    {
        $feature = WhyChooseUsFeature::findOrFail($id);

        if ($feature->icon && Storage::disk('public')->exists($feature->icon)) {
            Storage::disk('public')->delete($feature->icon);
        }

        $feature->delete();
        session()->flash('message', 'Feature deleted.');
    }

    public function resetForm()
    {
        $this->reset(['featureId', 'title', 'description', 'icon', 'oldIcon']);
    }

    public function render()
    {
        $features = WhyChooseUsFeature::where('why_choose_us_id', $this->whyChooseUsId)
            ->where(function ($q) {
                $q->where('title', 'like', "%{$this->search}%")
                    ->orWhere('description', 'like', "%{$this->search}%");
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate($this->perPage);

        return view('livewire.backend.why-choose-us-feature.index', compact('features'));
    }
}
