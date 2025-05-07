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

        return redirect()->route('admin.service.index');
    }

    public function render()
    {
        return view('livewire.backend.service.manage');
    }
}
