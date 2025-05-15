<div class="row">

    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">{{ $testimonialId ? 'Update' : 'Create' }} Testimonial</div>
            </div>

            <div class="card-body">
                <form wire:submit.prevent="save">
                    <div class="mb-3">
                        <label class="form-label">Service</label>
                        <select class="form-select" wire:model="service_id">
                            <option value="">Select Service</option>
                            @foreach ($services as $service)
                            <option value="{{ $service->id }}">{{ $service->title }}</option>
                            @endforeach
                        </select>
                        @error('service_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" wire:model="name">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Position</label>
                        <input type="text" class="form-control" wire:model="position">
                        @error('position') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Company</label>
                        <input type="text" class="form-control" wire:model="company">
                        @error('company') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <div class="preview">
                            @if ($image)
                            <img src="{{ $image->temporaryUrl() }}" alt="user-image">
                            @elseif ($existingImage)
                            <img src="{{ asset('storage/' . $existingImage) }}" alt="user-image">
                            @endif
                        </div>
                        <input type="file" class="form-control" wire:model="image">
                        @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Content</label>
                        <textarea class="form-control" wire:model="content" rows="5"></textarea>
                        @error('content') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Rating</label>
                        <input type="number" class="form-control" wire:model="rating" min="1" max="5">
                        @error('rating') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input" wire:model="is_active" id="activeSwitch" value="1">
                        <label class="form-check-label" for="activeSwitch">Active</label>
                        @error('is_active') <span class="text-danger d-block">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">
                        {{ $testimonialId ? 'Update' : 'Save' }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>