<div class="offices">
    <div class="row">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">{{ $officeId ? 'Edit' : 'Add New' }} Office</div>
                </div>

                <div class="card-body">
                    @if (session()->has('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                    @endif

                    <form wire:submit.prevent="save">
                        <div class="mb-3">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" id="country" class="form-control" wire:model="country" required>
                            @error('country') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="office_type" class="form-label">Office Type</label>
                            <input type="text" id="office_type" class="form-control" wire:model="office_type" placeholder="e.g., Registered Office" required>
                            @error('office_type') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea id="address" class="form-control" wire:model="address" rows="3" required></textarea>
                            @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" class="form-control" wire:model="email" required>
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" id="phone" class="form-control" wire:model="phone" required>
                            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="order" class="form-label">Display Order</label>
                            <input type="number" id="order" class="form-control" wire:model="order">
                            @error('order') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <div class="preview mb-2" style="max-width: 150px;">
                                @if ($image)
                                <img src="{{ $image->temporaryUrl() }}" class="img-fluid" alt="New Image Preview">
                                @elseif ($imagePreview)
                                <img src="{{ asset('storage/' . $imagePreview) }}" class="img-fluid" alt="Current Image">
                                @endif
                            </div>
                            <input type="file" id="image" class="form-control" wire:model="image">
                            @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">{{ $officeId ? 'Update Office' : 'Create Office' }}</button>
                        @if ($officeId)
                        <button type="button" class="btn btn-secondary" wire:click="resetForm">Cancel</button>
                        @endif
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Our Offices</div>
                </div>

                <div class="card-body">
                    <div class="mb-3 d-flex justify-content-end">
                        <input type="text" class="form-control w-25" placeholder="Search..." wire:model.live="search">
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered mt-4">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th wire:click="sortBy('country')" style="cursor: pointer;">
                                        Country @if($sortField === 'country') <i class="fa fa-arrow-{{ $sortDirection === 'asc' ? 'up' : 'down' }}"></i> @endif
                                    </th>
                                    <th>Contact</th>
                                    <th wire:click="sortBy('order')" style="cursor: pointer;">
                                        Order @if($sortField === 'order') <i class="fa fa-arrow-{{ $sortDirection === 'asc' ? 'up' : 'down' }}"></i> @endif
                                    </th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($offices as $office)
                                <tr>
                                    <td><img src="{{ url('storage/' . $office->image) }}" alt="{{ $office->country }}" style="width: 80px;"></td>
                                    <td>
                                        <strong>{{ $office->country }}</strong><br>
                                        <small>{{ $office->office_type }}</small>
                                    </td>
                                    <td>
                                        <small>
                                            {{ $office->address }}<br>
                                            <strong>E:</strong> {{ $office->email }}<br>
                                            <strong>P:</strong> {{ $office->phone }}
                                        </small>
                                    </td>
                                    <td>{{ $office->order }}</td>
                                    <td>
                                        <button class="btn btn-info btn-sm" wire:click="editOffice({{ $office->id }})"><i class="fas fa-pencil-alt"></i></button>
                                        <button class="btn btn-danger btn-sm" wire:click="confirmDelete({{ $office->id }})"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center">No Offices Found!</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-center">
                        {{ $offices->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Confirmation Modal -->
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this office location?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" wire:click="deleteOffice">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>