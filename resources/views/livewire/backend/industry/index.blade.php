<div class="industries">
    <div class="row">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">{{ $industryId ? 'Edit' : 'Add New' }} Industry</div>
                </div>

                <div class="card-body">
                    @if (session()->has('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                    @endif

                    <form wire:submit.prevent="save">
                        <div class="mb-3">
                            <label for="name" class="form-label">Industry Name</label>
                            <input type="text" id="name" class="form-control" wire:model="name" required>
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="order" class="form-label">Display Order</label>
                            <input type="number" id="order" class="form-control" wire:model="order">
                            @error('order') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="icon" class="form-label">Icon (SVG or Image)</label>
                            <div class="preview">
                                @if ($icon)
                                <img src="{{ $icon->temporaryUrl() }}" class="img-fluid" alt="New Icon Preview">
                                @elseif ($iconPreview)
                                <img src="{{ asset('storage/' . $iconPreview) }}" class="img-fluid" alt="Current Icon">
                                @endif
                            </div>
                            <input type="file" id="icon" class="form-control" wire:model="icon">
                            @error('icon') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">{{ $industryId ? 'Update Industry' : 'Create Industry' }}</button>
                        @if ($industryId)
                        <button type="button" class="btn btn-secondary" wire:click="resetForm">Cancel</button>
                        @endif
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Industries</div>
                </div>

                <div class="card-body">
                    <div class="mb-3 d-flex justify-content-end">
                        <input type="text" class="form-control w-25" placeholder="Search Industries..." wire:model.live="search">
                    </div>

                    <table class="table table-bordered mt-4">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Icon</th>
                                <th wire:click="sortBy('name')" style="cursor: pointer;">
                                    Name @if($sortField === 'name') <i class="fa fa-arrow-{{ $sortDirection === 'asc' ? 'up' : 'down' }}"></i> @endif
                                </th>
                                <th wire:click="sortBy('order')" style="cursor: pointer;">
                                    Order @if($sortField === 'order') <i class="fa fa-arrow-{{ $sortDirection === 'asc' ? 'up' : 'down' }}"></i> @endif
                                </th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($industries as $index => $industry)
                            <tr>
                                <td>{{ ($industries->currentPage() - 1) * $industries->perPage() + $index + 1 }}</td>
                                <td><img src="{{ url('storage/' . $industry->icon) }}" alt="{{ $industry->name }}" style="width: 40px;"></td>
                                <td>{{ $industry->name }}</td>
                                <td>{{ $industry->order }}</td>
                                <td>
                                    <button class="btn btn-info btn-sm" wire:click="editIndustry({{ $industry->id }})"><i class="fas fa-pencil-alt"></i></button>
                                    <button class="btn btn-danger btn-sm" wire:click="confirmDelete({{ $industry->id }})"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center">No Industries Found!</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-center">
                        {{ $industries->links() }}
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
                    Are you sure you want to delete this industry?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" wire:click="deleteIndustry">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>