<form wire:submit.prevent="save">
    <div class="row">
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="card-title"> {{ $portfolioId ? 'Edit Portfolio' : 'Add Portfolio' }}</div>
                </div>
                <div class="card-body">

                    @if (session()->has('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                    @endif


                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" wire:model="name" class="form-control">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Slug</label>
                        <input type="text" wire:model="slug" class="form-control">
                        @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" wire:model="title" class="form-control">
                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Short Description</label>
                        <textarea wire:model="short_description" class="form-control"></textarea>
                        @error('short_description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <livewire:quill-text-editor
                            wire:model="description"
                            theme="snow" />
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-4">

            <div class="card">
                <div class="card-header">
                    <div class="card-title">Publish</div>
                </div>
                <div class="card-body">
                    <!-- created at -->
                    @if($created_at)
                    <div class="mb-3">
                        <p class="form-control-plaintext mb-0"><span>Created At:</span> <strong>{{ $created_at->format('d M Y') }}</strong></p>
                    </div>
                    @endif

                    <!-- Updated At -->
                    @if($updated_at)
                    <div class="mb-3">
                        <p class="form-control-plaintext mb-0"><span>Updated At:</span> <strong>{{ $updated_at->format('d M Y') }}</strong></p>
                    </div>
                    @endif

                    <div class="form-check form-switch">
                        <input type="checkbox" wire:model="status" class="form-check-input" id="statusSwitch" value="1" {{ $status ? 'checked' : '' }}>
                        <label class="form-check-label" for="statusSwitch">Status: {{ $status ? 'Active' : 'Inactive' }}</label>
                        @error('status') <span class="text-danger d-block">{{ $message }}</span> @enderror
                    </div>


                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">
                            {{ $portfolioId ? 'Update' : 'Create' }}
                        </button>

                        <!-- cancel button -->
                        <a href="{{ route('admin.portfolio.index') }}" class="btn btn-secondary">
                            Cancel
                        </a>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">

                    <div class="mb-3">
                        <label class="form-label">Service</label>
                        <select wire:model="service_id" class="form-select">
                            <option value="">-- Select Service --</option>
                            @foreach ($services as $service)
                            <option value="{{ $service->id }}">{{ $service->title }}</option>
                            @endforeach
                        </select>
                        @error('service_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Client</label>
                        <select wire:model="client_id" class="form-select">
                            <option value="">-- Select Client --</option>
                            @foreach ($clients as $client)
                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                            @endforeach
                        </select>
                        @error('client_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Start Date</label>
                            <input type="date" wire:model="start_date" class="form-control">
                            @error('start_date') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">End Date</label>
                            <input type="date" wire:model="end_date" class="form-control">
                            @error('end_date') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Project URL</label>
                        <input type="url" wire:model="url" class="form-control">
                        @error('url') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
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

                </div>
            </div>
        </div>
    </div>
</form>