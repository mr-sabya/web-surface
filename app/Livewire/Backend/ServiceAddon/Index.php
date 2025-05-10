<?php

namespace App\Livewire\Backend\ServiceAddon;

use App\Models\ServiceAddon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithFileUploads;

    public $serviceId;
    public $title, $text, $icon, $oldIcon;
    public $addonIdBeingUpdated = null;
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
            'text'  => 'required|string',
            'icon'  => $this->addonIdBeingUpdated ? 'nullable|image|max:1024' : 'required|image|max:1024',
        ]);

        $iconPath = $this->icon
            ? $this->icon->store('service-addons', 'public')
            : $this->oldIcon;

        if ($this->addonIdBeingUpdated) {
            $addon = ServiceAddon::findOrFail($this->addonIdBeingUpdated);
            $addon->update([
                'title' => $this->title,
                'text'  => $this->text,
                'icon'  => $iconPath,
            ]);
        } else {
            ServiceAddon::create([
                'title'      => $this->title,
                'text'       => $this->text,
                'icon'       => $iconPath,
                'service_id' => $this->serviceId,
            ]);
        }

        $this->resetFields();
    }

    public function edit($id)
    {
        $addon = ServiceAddon::findOrFail($id);
        $this->addonIdBeingUpdated = $id;
        $this->title = $addon->title;
        $this->text  = $addon->text;
        $this->oldIcon = $addon->icon;
    }

    public function resetFields()
    {
        $this->title = '';
        $this->text = '';
        $this->icon = null;
        $this->oldIcon = null;
        $this->addonIdBeingUpdated = null;
    }

    public function delete($id)
    {
        ServiceAddon::destroy($id);
    }

    public function render()
    {
        $addons = ServiceAddon::where('service_id', $this->serviceId)
            ->where(function ($query) {
                $query->where('title', 'like', "%{$this->search}%")
                    ->orWhere('text', 'like', "%{$this->search}%");
            })
            ->latest()
            ->paginate($this->perPage);

        return view('livewire.backend.service-addon.index', compact('addons'));
    }
}
