<div class="row">
    <div class="col-lg-6">

        <div class="card">

            <div class="card-header">
                <h4>Banner Settings</h4>
            </div>

            <div class="card-body">
                <form wire:submit.prevent="save">
                    <div class="mb-3">
                        <label>Title</label>
                        <input type="text" wire:model.live="title" class="form-control">
                        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>

                    <div class="mb-3">
                        <label>Slug</label>
                        <input type="text" wire:model="slug" class="form-control">
                        @error('slug') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label>Heading</label>
                        <input type="text" wire:model="heading" class="form-control">
                        @error('heading') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label>Sub Heading</label>
                        <input type="text" wire:model="sub_heading" class="form-control">
                        @error('sub_heading') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label>Short Description</label>
                        <textarea wire:model="short_description" class="form-control"></textarea>
                        @error('short_description') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label>Description Title</label>
                        <input type="text" wire:model="description_title" class="form-control">
                        @error('description_title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label>Description</label>
                        <textarea wire:model="description" class="form-control" rows="10"></textarea>
                        @error('description') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label>Image</label>
                        <div class="preview">
                            @if ($newImage)
                            <img src="{{ $newImage->temporaryUrl() }}">
                            @elseif ($image)
                            <img src="{{ asset('storage/' . $image) }}">
                            @endif
                        </div>
                        <input type="file" wire:model="newImage" class="form-control">
                        @error('newImage') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <button class="btn btn-primary">{{ $serviceId ? 'Update' : 'Add' }}</button>
                    <a href="{{ route('admin.service.index') }}" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>

    </div>
</div>