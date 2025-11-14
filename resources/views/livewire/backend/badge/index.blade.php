<div class="badges">

    <div class="row">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">{{ $badgeId ? 'Edit' : 'Add New' }} Badge</div>
                </div>

                <div class="card-body">
                    <!-- Success Message -->
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    @endif


                    <!-- Form for Add/Edit -->
                    <form wire:submit.prevent="save">
                        <div class="mb-3">
                            <label for="title" class="form-label">Badge Title</label>
                            <input type="text" id="title" class="form-control" wire:model.blur="title" required>
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="order" class="form-label">Display Order</label>
                            <input type="number" id="order" class="form-control" wire:model.blur="order">
                            @error('order') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Image Upload -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <!-- Image Preview -->
                            <div class="preview">
                                @if ($image)
                                <img src="{{ $image->temporaryUrl() }}" alt="New Badge Image Preview" class="img-fluid">
                                @elseif ($imagePreview)
                                <img src="{{ asset('storage/' . $imagePreview) }}" alt="Current Badge Image" class="img-fluid">
                                @endif
                            </div>
                            <input type="file" id="image" class="form-control" wire:model="image">
                            @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">{{ $badgeId ? 'Update Badge' : 'Create Badge' }}</button>
                        @if ($badgeId)
                        <button type="button" class="btn btn-secondary" wire:click="resetForm">Cancel</button>
                        @endif
                    </form>

                </div>
            </div>

        </div>

        <div class="col-lg-7">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Badges</div>
                </div>

                <div class="card-body">
                    <!-- Search Input -->
                    <div class="mb-3 d-flex justify-content-end">
                        <div class="w-25">
                            <input type="text" class="form-control" placeholder="Search Badges" wire:model.live="search">
                        </div>
                    </div>
                    <!-- Table -->
                    <table class="table table-bordered mt-4">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th wire:click="sortBy('title')" style="cursor: pointer;">
                                    Title
                                    @if ($sortField === 'title')
                                    @if ($sortDirection === 'asc')
                                    <i class="fa fa-arrow-up"></i>
                                    @else
                                    <i class="fa fa-arrow-down"></i>
                                    @endif
                                    @endif
                                </th>
                                <th wire:click="sortBy('order')" style="cursor: pointer;">
                                    Order
                                    @if ($sortField === 'order')
                                    @if ($sortDirection === 'asc')
                                    <i class="fa fa-arrow-up"></i>
                                    @else
                                    <i class="fa fa-arrow-down"></i>
                                    @endif
                                    @endif
                                </th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($badges as $index => $badge)
                            <tr>
                                <td>{{ ($badges->currentPage() - 1) * $badges->perPage() + $index + 1 }}</td>
                                <td>
                                    <img src="{{ url('storage/' . $badge->image) }}" alt="{{ $badge->title }}" style="width: 80px;">
                                </td>
                                <td>{{ $badge->title }}</td>
                                <td>{{ $badge->order }}</td>
                                <td>
                                    <button class="btn btn-info btn-sm" wire:click="editBadge({{ $badge->id }})"><i class="fas fa-pencil-alt"></i></button>
                                    <button class="btn btn-danger btn-sm" wire:click="confirmDelete({{ $badge->id }})"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center">No Badges Found!!</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-center">
                        {{ $badges->links() }}
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
                    Are you sure you want to delete this badge?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" wire:click="deleteBadge">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
