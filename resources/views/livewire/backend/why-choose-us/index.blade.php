<div>
    <h2 class="mb-4">Edit Why Choose Us Section</h2>

    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    <form wire:submit.prevent="save">

        <div class="mb-3">
            <label for="section_heading" class="form-label">Section Heading</label>
            <input type="text" id="section_heading" class="form-control" wire:model.defer="section_heading">
            @error('section_heading') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="title_normal" class="form-label">Title Normal</label>
            <input type="text" id="title_normal" class="form-control" wire:model.defer="title_normal">
            @error('title_normal') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="title_highlighted" class="form-label">Title Highlighted</label>
            <input type="text" id="title_highlighted" class="form-control" wire:model.defer="title_highlighted">
            @error('title_highlighted') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="title_suffix" class="form-label">Title Suffix</label>
            <input type="text" id="title_suffix" class="form-control" wire:model.defer="title_suffix">
            @error('title_suffix') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" class="form-control" rows="4" wire:model.defer="description"></textarea>
            @error('description') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <hr>

        <h4>Call To Action (CTA) Section</h4>

        <div class="mb-3">
            <label for="cta_title_prefix" class="form-label">CTA Title Prefix</label>
            <input type="text" id="cta_title_prefix" class="form-control" wire:model.defer="cta_title_prefix">
            @error('cta_title_prefix') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="cta_title_highlight" class="form-label">CTA Title Highlight</label>
            <input type="text" id="cta_title_highlight" class="form-control" wire:model.defer="cta_title_highlight">
            @error('cta_title_highlight') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="cta_title_suffix" class="form-label">CTA Title Suffix</label>
            <input type="text" id="cta_title_suffix" class="form-control" wire:model.defer="cta_title_suffix">
            @error('cta_title_suffix') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="cta_description" class="form-label">CTA Description</label>
            <textarea id="cta_description" class="form-control" rows="3" wire:model.defer="cta_description"></textarea>
            @error('cta_description') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="cta_button_text" class="form-label">CTA Button Text</label>
            <input type="text" id="cta_button_text" class="form-control" wire:model.defer="cta_button_text">
            @error('cta_button_text') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <hr>

        <h4>Image Section</h4>

        <div class="mb-3">
            <label for="image" class="form-label">Image Path (URL or Storage Path)</label>
            <input type="text" id="image" class="form-control" wire:model.defer="image">
            @error('image') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        @if ($image)
        <div class="mb-3">
            <label class="form-label">Current Image Preview:</label><br>
            <img src="{{ asset($image) }}" alt="Image Preview" style="max-width: 300px; height: auto; border: 1px solid #ddd; padding: 5px;">
        </div>
        @endif

        <div class="mb-3">
            <label for="image_text" class="form-label">Image Text (Caption)</label>
            <input type="text" id="image_text" class="form-control" wire:model.defer="image_text">
            @error('image_text') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Save Changes</button>

    </form>
</div>