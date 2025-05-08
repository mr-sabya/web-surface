<?php

namespace App\Livewire\Backend\Technology;

use Illuminate\Support\Str;
use App\Models\Technology;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithFileUploads;

    public $technologyId;
    public $name, $slug, $logo, $newLogo;
    public $search = '';
    public $perPage = 10;


    public function updatedName()
    {
        $this->slug = Str::slug($this->name);
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:technologies,slug,' . $this->technologyId,
            'newLogo' => $this->technologyId ? 'nullable|image|max:1024' : 'required|image|max:1024',
        ]);

        $logoPath = $this->logo;
        if ($this->newLogo) {
            $logoPath = $this->newLogo->store('technologies', 'public');
        }

        Technology::updateOrCreate(
            ['id' => $this->technologyId],
            [
                'name' => $this->name,
                'slug' => $this->slug,
                'logo' => $logoPath,
            ]
        );

        session()->flash('success', $this->technologyId ? 'Updated successfully.' : 'Created successfully.');
        $this->resetForm();
    }

    public function edit($id)
    {
        $tech = Technology::findOrFail($id);
        $this->technologyId = $tech->id;
        $this->name = $tech->name;
        $this->slug = $tech->slug;
        $this->logo = $tech->logo;
        $this->newLogo = null;
    }

    public function delete($id)
    {
        Technology::findOrFail($id)->delete();
        session()->flash('success', 'Deleted successfully.');
    }

    public function resetForm()
    {
        $this->reset(['technologyId', 'name', 'slug', 'logo', 'newLogo']);
    }

    
    public function render()
    {
        $technologies = Technology::where('name', 'like', '%' . $this->search . '%')
            ->latest()
            ->paginate($this->perPage);

        return view('livewire.backend.technology.index', compact('technologies'));
    }
}
