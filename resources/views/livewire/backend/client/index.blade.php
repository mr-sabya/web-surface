<div class="clients">

    <div class="row">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">{{ $clientId ? 'Edit' : 'Add New' }} Client</div>
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
                            <label for="name" class="form-label">Client Name</label>
                            <input type="text" id="name" class="form-control" wire:model="name" required>
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="website" class="form-label">Website</label>
                            <input type="url" id="website" class="form-control" wire:model="website">
                            @error('website') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Logo Upload -->
                        <div class="mb-3">
                            <label for="logo" class="form-label">Logo</label>
                            <!-- Image Preview -->
                            <div class="preview">
                                @if ($logoPreview)
                                <img src="{{ asset('storage/' . $logoPreview) }}" alt="Client Logo">
                                @elseif ($logo)
                                <img src="{{ $logo->temporaryUrl() }}" alt="Client Logo">
                                @endif
                            </div>
                            <input type="file" id="logo" class="form-control" wire:model="logo">
                            @error('logo') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">{{ $clientId ? 'Update Client' : 'Create Client' }}</button>
                        @if ($clientId)
                        <button type="button" class="btn btn-secondary" wire:click="resetForm">Cancel</button>
                        @endif
                    </form>

                </div>
            </div>

        </div>

        <div class="col-lg-7">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Clients</div>
                </div>

                <div class="card-body">
                    <!-- Search Input -->
                    <div class="mb-3 d-flex justify-content-end">
                        <div class="w-25">
                            <input type="text" class="form-control" placeholder="Search Clients" wire:model.live="search">
                        </div>
                    </div>
                    <!-- Table -->
                    <table class="table table-bordered mt-4">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Logo</th>
                                <th wire:click="sortBy('name')" style="cursor: pointer;">
                                    Name
                                    @if ($sortField === 'name')
                                    @if ($sortDirection === 'asc')
                                    <i class="fa fa-arrow-up"></i>
                                    @else
                                    <i class="fa fa-arrow-down"></i>
                                    @endif
                                    @endif
                                </th>
                                <th wire:click="sortBy('website')" style="cursor: pointer;">
                                    Website
                                    @if ($sortField === 'website')
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
                            @forelse ($clients as $index => $client)
                            <tr>
                                <td>{{ ($clients->currentPage() - 1) * $clients->perPage() + $index + 1 }}</td>
                                <td>
                                    <img src="{{ url('storage/' . $client->logo) }}" alt="{{ $client->name }}" style="width: 80px;">
                                </td>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->website }}</td>
                                <td>
                                    <button class="btn btn-info btn-sm" wire:click="editClient({{ $client->id }})"><i class="fas fa-pencil-alt"></i></button>
                                    <button class="btn btn-danger btn-sm" wire:click="confirmDelete({{ $client->id }})"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center">No Clients Found!!</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-center">
                        {{ $clients->links() }}
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
                    Are you sure you want to delete this client?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" wire:click="deleteClient">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>