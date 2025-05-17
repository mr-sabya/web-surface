<?php

namespace App\Livewire\Backend\AboutSectionFeature;

use App\Models\AboutSectionFeature;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination, WithFileUploads;

    public $aboutSectionId;
    public $featureId, $icon, $icon_preview, $title, $text, $counter, $counter_icon, $color_code;

    public $search = '';
    public $sortField = 'id';
    public $sortDirection = 'desc';
    public $perPage = 10;

    protected $rules = [
        'title' => 'required|string',
        'text' => 'nullable|string',
        'icon' => 'nullable|image|max:2048',
        'counter' => 'nullable|string',
        'counter_icon' => 'nullable|string',
        'color_code' => 'nullable|string',
    ];

    public function mount($aboutSectionId)
    {
        $this->aboutSectionId = $aboutSectionId;
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function save()
    {
        $this->validate();

        $path = $this->icon
            ? $this->icon->store('about-features', 'public')
            : $this->icon_preview;

        AboutSectionFeature::updateOrCreate(
            ['id' => $this->featureId],
            [
                'about_section_id' => $this->aboutSectionId,
                'icon' => $path,
                'title' => $this->title,
                'text' => $this->text,
                'counter' => $this->counter,
                'counter_icon' => $this->counter_icon,
                'color_code' => $this->color_code,
            ]
        );

        $this->resetForm();

        session()->flash('message', 'Feature saved successfully.');
    }

    public function edit($id)
    {
        $feature = AboutSectionFeature::findOrFail($id);
        $this->featureId = $feature->id;
        $this->icon_preview = $feature->icon;
        $this->title = $feature->title;
        $this->text = $feature->text;
        $this->counter = $feature->counter;
        $this->counter_icon = $feature->counter_icon;
        $this->color_code = $feature->color_code;
    }

    public function delete($id)
    {
        AboutSectionFeature::findOrFail($id)->delete();
        session()->flash('message', 'Feature deleted.');
    }

    public function resetForm()
    {
        $this->reset([
            'featureId',
            'icon',
            'icon_preview',
            'title',
            'text',
            'counter',
            'counter_icon',
            'color_code'
        ]);
    }

    public function sortBy($field)
    {
        $this->sortDirection = $this->sortField === $field && $this->sortDirection === 'asc' ? 'desc' : 'asc';
        $this->sortField = $field;
    }

    public function render()
    {
        $features = AboutSectionFeature::where('about_section_id', $this->aboutSectionId)
            ->where(function ($q) {
                $q->where('title', 'like', "%{$this->search}%")
                    ->orWhere('text', 'like', "%{$this->search}%");
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate($this->perPage);

        return view('livewire.backend.about-section-feature.index', compact('features'));
    }
}
