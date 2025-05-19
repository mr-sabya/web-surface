<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>About Section</h4>
            </div>

            <div class="card-body">
                <form wire:submit.prevent="save" class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Title Span</label>
                        <input type="text" class="form-control" wire:model.defer="title_span">
                        @error('title_span') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-8 mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" wire:model.defer="title">
                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-12 mb-3">
                        <label class="form-label">Description</label>
                        <livewire:quill-text-editor
                            wire:model="description"
                            theme="snow" />
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Button Text</label>
                        <input type="text" class="form-control" wire:model.defer="button_text">
                        @error('button_text') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Button Link</label>
                        <input type="text" class="form-control" wire:model.defer="button_link">
                        @error('button_link') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Button Icon</label>
                        <input type="text" class="form-control" wire:model.defer="button_icon">
                        @error('button_icon') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Button Target</label>
                        <select class="form-select" wire:model.defer="button_target">
                            <option value="_self">Same Tab (_self)</option>
                            <option value="_blank">New Tab (_blank)</option>
                        </select>
                        @error('button_target') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        @if($about)
        <livewire:backend.about-section-feature.index aboutSectionId="{{ $about->id }}" />
        @else
        <div class="alert alert-warning">
            <strong>Warning!</strong> No about section found. Please create an about section first.
        </div>
        @endif
    </div>
</div>