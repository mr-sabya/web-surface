<div class="philosophies">
    <div class="row">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">{{ $philosophyId ? 'Edit' : 'Add New' }} Philosophy</div>
                </div>
                <div class="card-body">
                    @if(session()->has('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                    @endif

                    <form wire:submit.prevent="save">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" wire:model="title">
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Subtitle</label>
                            <input type="text" class="form-control" wire:model="sub_title">
                            @error('sub_title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Text</label>
                            <textarea class="form-control" rows="4" wire:model="text"></textarea>
                            @error('text') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <div class="preview mb-2" style="max-width: 150px;">
                                @if($image)
                                <img src="{{ $image->temporaryUrl() }}" class="img-fluid" alt="New Image Preview">
                                @elseif($imagePreview)
                                <img src="{{ asset('storage/' . $imagePreview) }}" class="img-fluid" alt="Current Image">
                                @endif
                            </div>
                            <input type="file" class="form-control" wire:model="image">
                            @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">{{ $philosophyId ? 'Update' : 'Create' }}</button>
                        @if($philosophyId)
                        <button type="button" class="btn btn-secondary" wire:click="resetForm">Cancel</button>
                        @endif
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">All Philosophies</div>
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
                                    <th wire:click="sortBy('title')" style="cursor:pointer;">
                                        Title @if($sortField==='title') <i class="fa fa-arrow-{{ $sortDirection==='asc'?'up':'down' }}"></i> @endif
                                    </th>
                                    <th>Subtitle</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($philosophies as $philosophy)
                                <tr>
                                    <td>
                                        @if($philosophy->image)
                                        <img src="{{ asset('storage/' . $philosophy->image) }}" alt="{{ $philosophy->title }}" style="width:80px;">
                                        @endif
                                    </td>
                                    <td>{{ $philosophy->title }}</td>
                                    <td>{{ $philosophy->sub_title }}</td>
                                    <td>
                                        <button class="btn btn-info btn-sm" wire:click="editPhilosophy({{ $philosophy->id }})"><i class="fas fa-pencil-alt"></i></button>
                                        <button class="btn btn-danger btn-sm" wire:click="confirmDelete({{ $philosophy->id }})"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center">No Philosophies Found!</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-center">
                        {{ $philosophies->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this philosophy?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" wire:click="deletePhilosophy">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>