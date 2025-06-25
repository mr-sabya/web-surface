<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5 class="mb-0">{{ $pageId ? 'Edit Page' : 'Create Page' }}</h5>
                
            </div>

            <div class="card-body">
                @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <form wire:submit.prevent="save">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label class="form-label">Title</label>
                            <input class="form-control" wire:model.lazy="title" wire:keyup="generateSlug">
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Slug</label>
                            <input class="form-control" wire:model.lazy="slug">
                            @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12">
                            <label class="form-label">Content</label>
                            <livewire:quill-text-editor
                                wire:model="content"
                                theme="snow" />
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Meta Title</label>
                            <input class="form-control" placeholder="Meta Title" wire:model.lazy="meta_title">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Meta Description</label>
                            <textarea class="form-control" wire:model.lazy="meta_description"></textarea>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Meta Keywords</label>
                            <input class="form-control" placeholder="Meta Keywords" wire:model.lazy="meta_keywords">
                        </div>

                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" wire:model="is_published" id="pub">
                                <label class="form-check-label" for="pub">Published</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary">{{ $pageId ? 'Update' : 'Create' }}</button>
                            <a href="{{ route('admin.page.index') }}" class="btn btn-secondary ms-2">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>