<div class="review-platforms">
    <div class="row">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">{{ $platformId ? 'Edit' : 'Add New' }} Review Platform</div>
                </div>
                <div class="card-body">
                    @if (session()->has('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif

                    <form wire:submit.prevent="save">
                        <div class="mb-3">
                            <label class="form-label">Platform Name</label>
                            <input type="text" class="form-control" wire:model="name" required>
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Link</label>
                            <input type="url" class="form-control" wire:model="link">
                            @error('link') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Display Order</label>
                            <input type="number" class="form-control" wire:model="order">
                            @error('order') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Image/Logo</label>
                            <div class="preview">
                                @if ($image)
                                    <img src="{{ $image->temporaryUrl() }}" class="img-fluid" alt="New Image Preview">
                                @elseif ($imagePreview)
                                    <img src="{{ asset('storage/' . $imagePreview) }}" class="img-fluid" alt="Current Image">
                                @endif
                            </div>
                            <input type="file" class="form-control" wire:model="image">
                            @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">{{ $platformId ? 'Update' : 'Create' }}</button>
                        @if ($platformId)
                            <button type="button" class="btn btn-secondary" wire:click="resetForm">Cancel</button>
                        @endif
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="card">
                <div class="card-header"><div class="card-title">Review Platforms</div></div>
                <div class="card-body">
                    <div class="mb-3 d-flex justify-content-end">
                        <input type="text" class="form-control w-25" placeholder="Search..." wire:model.live="search">
                    </div>

                    <table class="table table-bordered mt-4">
                        <thead>
                            <tr>
                                <th>Logo</th>
                                <th wire:click="sortBy('name')" style="cursor: pointer;">Name <i class="fa fa-sort"></i></th>
                                <th wire:click="sortBy('order')" style="cursor: pointer;">Order <i class="fa fa-sort"></i></th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($platforms as $platform)
                                <tr>
                                    <td><img src="{{ url('storage/' . $platform->image) }}" alt="{{ $platform->name }}" style="width: 80px;"></td>
                                    <td>{{ $platform->name }}</td>
                                    <td>{{ $platform->order }}</td>
                                    <td>
                                        <button class="btn btn-info btn-sm" wire:click="editPlatform({{ $platform->id }})"><i class="fas fa-pencil-alt"></i></button>
                                        <button class="btn btn-danger btn-sm" wire:click="confirmDelete({{ $platform->id }})"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="4" class="text-center">No Review Platforms Found!</td></tr>
                            @endforelse {{-- <<< THIS LINE WAS MISSING --}}
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">{{ $platforms->links() }}</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Confirmation Modal -->
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"><h5 class="modal-title">Confirm Deletion</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
                <div class="modal-body">Are you sure you want to delete this review platform?</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" wire:click="deletePlatform">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>