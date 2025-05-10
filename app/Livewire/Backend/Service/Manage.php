<?php

namespace App\Livewire\Backend\Service;

use App\Models\Service;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Manage extends Component
{
    use WithFileUploads;

    public $serviceId;
    public $title, $slug, $heading, $sub_heading, $short_description, $description_title, $description, $image, $newImage;
    public $feature_section_title, $feature_section_sub_title, $feature_section_text;
    public $process_section_title, $process_section_sub_title, $process_section_text;
    public $addon_section_title, $addon_section_sub_title, $addon_section_text;
    public $pricing_section_title, $pricing_section_sub_title, $pricing_section_text;
    public $portfolio_section_title, $portfolio_section_sub_title, $portfolio_section_text;
    public $testimonial_section_title, $testimonial_section_sub_title, $testimonial_section_text;


    public function mount($serviceId = null)
    {
        $this->serviceId = $serviceId;

        if ($serviceId) {
            $service = Service::findOrFail($serviceId);
            $this->title = $service->title;
            $this->slug = $service->slug;
            $this->heading = $service->heading;
            $this->sub_heading = $service->sub_heading;
            $this->short_description = $service->short_description;
            $this->description_title = $service->description_title;
            $this->description = $service->description;
            $this->image = $service->image;
            $this->feature_section_title = $service->feature_section_title;
            $this->feature_section_sub_title = $service->feature_section_sub_title;
            $this->feature_section_text = $service->feature_section_text;
            $this->process_section_title = $service->process_section_title;
            $this->process_section_sub_title = $service->process_section_sub_title;
            $this->process_section_text = $service->process_section_text;
            $this->addon_section_title = $service->addon_section_title;
            $this->addon_section_sub_title = $service->addon_section_sub_title;
            $this->addon_section_text = $service->addon_section_text;
            $this->pricing_section_title = $service->pricing_section_title;
            $this->pricing_section_sub_title = $service->pricing_section_sub_title;
            $this->pricing_section_text = $service->pricing_section_text;
            $this->portfolio_section_title = $service->portfolio_section_title;
            $this->portfolio_section_sub_title = $service->portfolio_section_sub_title;
            $this->portfolio_section_text = $service->portfolio_section_text;
            $this->testimonial_section_title = $service->testimonial_section_title;
            $this->testimonial_section_sub_title = $service->testimonial_section_sub_title;
            $this->testimonial_section_text = $service->testimonial_section_text;
        }
    }

    public function updatedTitle()
    {
        $this->slug = Str::slug($this->title);
    }

    protected function rules()
    {
        return [
            'title' => 'required',
            'slug' => 'required|unique:services,slug,' . $this->serviceId,
            'heading' => 'required',
            'sub_heading' => 'required',
            'short_description' => 'required',
            'description_title' => 'required',
            'description' => 'required',
            'newImage' => $this->serviceId ? 'nullable|image' : 'required|image',
            'feature_section_title' => 'nullable|string|max:255',
            'feature_section_sub_title' => 'nullable|string|max:255',
            'feature_section_text' => 'nullable|string|max:255',
            'process_section_title' => 'nullable|string|max:255',
            'process_section_sub_title' => 'nullable|string|max:255',
            'process_section_text' => 'nullable|string|max:255',
            'addon_section_title' => 'nullable|string|max:255',
            'addon_section_sub_title' => 'nullable|string|max:255',
            'addon_section_text' => 'nullable|string|max:255',
            'pricing_section_title' => 'nullable|string|max:255',
            'pricing_section_sub_title' => 'nullable|string|max:255',
            'pricing_section_text' => 'nullable|string|max:255',
            'portfolio_section_title' => 'nullable|string|max:255',
            'portfolio_section_sub_title' => 'nullable|string|max:255',
            'portfolio_section_text' => 'nullable|string|max:255',
            'testimonial_section_title' => 'nullable|string|max:255',
            'testimonial_section_sub_title' => 'nullable|string|max:255',
            'testimonial_section_text' => 'nullable|string|max:255',

        ];
    }

    public function save()
    {
        $this->validate();

        $data = [
            'title' => $this->title,
            'slug' => $this->slug,
            'heading' => $this->heading,
            'sub_heading' => $this->sub_heading,
            'short_description' => $this->short_description,
            'description_title' => $this->description_title,
            'description' => $this->description,
            'feature_section_title' => $this->feature_section_title,
            'feature_section_sub_title' => $this->feature_section_sub_title,
            'feature_section_text' => $this->feature_section_text,
            'process_section_title' => $this->process_section_title,
            'process_section_sub_title' => $this->process_section_sub_title,
            'process_section_text' => $this->process_section_text,
            'addon_section_title' => $this->addon_section_title,
            'addon_section_sub_title' => $this->addon_section_sub_title,
            'addon_section_text' => $this->addon_section_text,
            'pricing_section_title' => $this->pricing_section_title,
            'pricing_section_sub_title' => $this->pricing_section_sub_title,
            'pricing_section_text' => $this->pricing_section_text,
            'portfolio_section_title' => $this->portfolio_section_title,
            'portfolio_section_sub_title' => $this->portfolio_section_sub_title,
            'portfolio_section_text' => $this->portfolio_section_text,
            'testimonial_section_title' => $this->testimonial_section_title,
            'testimonial_section_sub_title' => $this->testimonial_section_sub_title,
            'testimonial_section_text' => $this->testimonial_section_text,
            
        ];

        if ($this->newImage) {
            $data['image'] = $this->newImage->store('services', 'public');
        }

        if ($this->serviceId) {
            Service::findOrFail($this->serviceId)->update($data);
            $this->dispatch('toast', ['message' => 'Service updated']);
        } else {
            $data['image'] = $data['image'] ?? null;
            Service::create($data);
            $this->dispatch('toast', ['message' => 'Service created']);
        }

        return $this->redirect(route('admin.service.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.backend.service.manage');
    }
}
