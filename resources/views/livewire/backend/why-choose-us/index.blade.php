<div>

    <form wire:submit.prevent="save">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Why Choose Us Section</div>
                    </div>

                    <div class="card-body">
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

                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <div class="preview" style="height: 250px;">
                                @if ($newImage)
                                <img src="{{ $newImage->temporaryUrl() }}" alt="portfolio-image">
                                @elseif ($image)
                                <img src="{{ asset('storage/' . $image) }}" alt="portfolio-image">
                                @endif
                            </div>
                            <input type="file" wire:model="newImage" class="form-control">
                            @error('newImage') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image_text" class="form-label">Image Text (Caption)</label>
                            <textarea rows="5" class="form-control" wire:model.defer="image_text"></textarea>
                            @error('image_text') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                </div>

            </div>



            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Call To Action (CTA) Section</div>
                    </div>

                    <div class="card-body">

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
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Save Changes</button>

    </form>
    
</div>