<?php

namespace App\Livewire\Backend\ServiceProcess;

use App\Models\ServiceProcess;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithFileUploads;

    public $serviceId;
    public $serviceProcessId;
    public $title, $text, $image, $oldImage;

    public $search = '';
    public $perPage = 10;

    protected $rules = [
        'title' => 'required|string|max:255',
        'text' => 'required|string|max:500',
        'image' => 'nullable|image|max:1024',
    ];

    public function mount($serviceId)
    {
        $this->serviceId = $serviceId;
    }

    public function save()
    {
        $this->validate();

        $path = $this->image ? $this->image->store('service_processes', 'public') : $this->oldImage;

        ServiceProcess::updateOrCreate(
            ['id' => $this->serviceProcessId],
            [
                'service_id' => $this->serviceId,
                'title' => $this->title,
                'text' => $this->text,
                'image' => $path,
            ]
        );

        $this->resetForm();
        session()->flash('success', 'Service Process saved successfully.');
    }

    public function edit($id)
    {
        $data = ServiceProcess::findOrFail($id);
        $this->serviceProcessId = $id;
        $this->title = $data->title;
        $this->text = $data->text;
        $this->oldImage = $data->image;
    }

    public function delete($id)
    {
        ServiceProcess::findOrFail($id)->delete();
        session()->flash('success', 'Deleted successfully.');
    }

    public function resetForm()
    {
        $this->reset(['serviceProcessId', 'title', 'text', 'image', 'oldImage']);
    }

    public function render()
    {
        $processes = ServiceProcess::where('service_id', $this->serviceId)
            ->where('title', 'like', "%{$this->search}%")
            ->latest()
            ->paginate($this->perPage);

        return view('livewire.backend.service-process.index', [
            'processes' => $processes
        ]);
    }
}
