<div class="service">
    <form wire:submit.prevent="save">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">

                    <div class="card-header">
                        <h4>Banner Settings</h4>
                    </div>

                    <div class="card-body">
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


                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Portfolio Section</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Portfolio Section Title</label>
                            <input type="text" wire:model.lazy="portfolio_section_title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Portfolio Section Sub Title</label>
                            <input type="text" wire:model.lazy="portfolio_section_sub_title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Portfolio Section Text</label>
                            <textarea wire:model.lazy="portfolio_section_text" class="form-control"></textarea>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Testimonial Section</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Testimonial Section Title</label>
                            <input type="text" wire:model.lazy="testimonial_section_title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Testimonial Section Sub Title</label>
                            <input type="text" wire:model.lazy="testimonial_section_sub_title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Testimonial Section Text</label>
                            <textarea wire:model.lazy="testimonial_section_text" class="form-control"></textarea>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-primary">{{ $serviceId ? 'Update' : 'Add' }}</button>
                        <a href="{{ route('admin.service.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">



                <div class="card">
                    <div class="card-header">
                        <h4>Feature Section (Services)</h4>
                    </div>

                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Feature Section Title</label>
                            <input type="text" wire:model.lazy="feature_section_title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Feature Section Sub Title</label>
                            <input type="text" wire:model.lazy="feature_section_sub_title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Feature Section Text</label>
                            <textarea wire:model.lazy="feature_section_text" class="form-control"></textarea>
                        </div>
                    </div>
                </div>

                <div class="card">

                    <div class="card-header">
                        <h4>Process Section (Process)</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Process Section Title</label>
                            <input type="text" wire:model.lazy="process_section_title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Process Section Sub Title</label>
                            <input type="text" wire:model.lazy="process_section_sub_title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Process Section Text</label>
                            <textarea wire:model.lazy="process_section_text" class="form-control"></textarea>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header">
                        <h4>Addon Section (Why Choose us)</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Addon Section Title</label>
                            <input type="text" wire:model.lazy="addon_section_title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Addon Section Sub Title</label>
                            <input type="text" wire:model.lazy="addon_section_sub_title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Addon Section Text</label>
                            <textarea wire:model.lazy="addon_section_text" class="form-control"></textarea>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Pricing Section</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Pricing Section Title</label>
                            <input type="text" wire:model.lazy="pricing_section_title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pricing Section Sub Title</label>
                            <input type="text" wire:model.lazy="pricing_section_sub_title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pricing Section Text</label>
                            <textarea wire:model.lazy="pricing_section_text" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Technology</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Pricing Section Title</label>
                            <select wire:model="technologies" class="form-control" multiple>
                                <option value="">Select Technology</option>
                                @foreach($technologyList as $technology)
                                    <option value="{{ $technology->id }}">{{ $technology->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>



            </div>
        </div>

    </form>
</div>