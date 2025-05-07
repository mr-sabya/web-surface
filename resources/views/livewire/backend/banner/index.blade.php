<!-- resources/views/livewire/banner-component.blade.php -->

<div class="row">
    <div class="col-lg-8">


        <div class="card">
            <div class="card-header">
                <h4>Banner Settings</h4>
            </div>
            <div class="card-body">
                @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <form wire:submit.prevent="save">
                    <div class="mb-3">
                        <label class="form-label">Heading</label>
                        <input type="text" class="form-control" wire:model="heading">
                        @error('heading') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Paragraph</label>
                        <textarea class="form-control" wire:model="paragraph"></textarea>
                        @error('paragraph') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Video Link</label>
                        <input type="text" class="form-control" wire:model="video_link">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <div class="preview" style="height: 200px;">
                            @if ($image)
                            <img src="{{ $image->temporaryUrl() }}">
                            @elseif ($image_preview)
                            <img src="{{ asset('storage/' . $image_preview) }}">
                            @endif
                        </div>
                        <input type="file" class="form-control" wire:model="image">
                        @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Button Text</label>
                        <input type="text" class="form-control" wire:model="btn_text">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Button Link</label>
                        <input type="text" class="form-control" wire:model="btn_link">
                    </div>

                    <button type="submit" class="btn btn-primary">Save Banner</button>
                </form>
            </div>
        </div>

    </div>
</div>