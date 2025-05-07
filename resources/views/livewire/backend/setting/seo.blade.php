<div class="row">
    <div class="col-lg-6">

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">SEO Settings</h4>
            </div>
            <div class="card-body">

                @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <form wire:submit.prevent="save">

                    <div class="mb-3">
                        <label class="form-label">Meta Title</label>
                        <input type="text" class="form-control" wire:model="meta_title">
                        @error('meta_title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Meta Description</label>
                        <textarea class="form-control" wire:model="meta_description" rows="3"></textarea>
                        @error('meta_description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Meta Tags (comma separated)</label>
                        <input type="text" class="form-control" wire:model="meta_tags">
                        @error('meta_tags') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <hr>

                    <div class="mb-3">
                        <label class="form-label">OG Title</label>
                        <input type="text" class="form-control" wire:model="og_title">
                        @error('og_title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">OG Description</label>
                        <textarea class="form-control" wire:model="og_description" rows="3"></textarea>
                        @error('og_description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">OG Image</label>
                        <div class="preview" style="height: 200px;">
                            @if ($og_image)
                            <img src="{{ $og_image->temporaryUrl() }}">
                            @elseif ($og_image_preview)
                            <img src="{{ asset('storage/' . $og_image_preview) }}">
                            @endif
                        </div>
                        <input type="file" class="form-control" wire:model="og_image">
                        @error('og_image') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Save Changes</button>

                </form>
            </div>
        </div>

    </div>
</div>