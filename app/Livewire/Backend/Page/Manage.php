<?php

namespace App\Livewire\Backend\Page;

use App\Models\Page;
use Illuminate\Support\Str;
use Livewire\Component;

class Manage extends Component
{
    /* id comes via mount */
    public $pageId;

    /* form fields */
    public $title = '';
    public $slug  = '';
    public $content = '';
    public $meta_title = '';
    public $meta_description = '';
    public $meta_keywords = '';
    public $is_published = false;

    /* load record when editing */
    public function mount($pageId = null)
    {
        $this->pageId = $pageId;

        if ($this->pageId) {
            $page = Page::findOrFail($this->pageId);
            $this->fill($page->toArray());
        }
    }

    protected function rules(): array
    {
        return [
            'title'            => 'required|string|max:255',
            'slug'             => 'required|string|max:255|unique:pages,slug,' . ($this->pageId ?? 'NULL') . ',id',
            'content'          => 'nullable',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'meta_keywords'    => 'nullable|string|max:255',
            'is_published'     => 'boolean',
        ];
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->title);
    }

    public function save()
    {
        $this->slug = $this->slug ?: Str::slug($this->title);
        $data = $this->validate();

        Page::updateOrCreate(['id' => $this->pageId], $data);

        session()->flash('message', $this->pageId ? 'Page updated!' : 'Page created!');
        return $this->redirect(route('admin.page.index'), navigate:true);
    }

    public function render()
    {
        return view('livewire.backend.page.manage');
    }
}
