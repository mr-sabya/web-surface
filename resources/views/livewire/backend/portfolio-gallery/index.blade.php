<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <div class="card-title">{{ $galleryId ? 'Edit' : 'Add' }} Gallery</div>
            </div>
            <div class="card-body">
                @if (session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input wire:model.defer="title" type="text" class="form-control">
                    @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <div class="preview">
                        @if ($newImage)
                        <img src="{{ $newImage->temporaryUrl() }}" alt="portfolio-gallery">
                        @elseif ($image)
                        <img src="{{ asset('storage/' . $image) }}" alt="portfolio-gallery">
                        @endif
                    </div>
                    <input wire:model="newImage" type="file" class="form-control">
                    @error('newImage') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Image Alt</label>
                    <input wire:model.defer="image_alt" type="text" class="form-control">
                    @error('image_alt') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <button wire:click="save" class="btn btn-primary">Save</button>
                <button wire:click="resetForm" class="btn btn-secondary">Cancel</button>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Gallery Management</div>
            </div>
            <div class="card-body">
                <div class="mb-2 w-25">
                    <input wire:model="search" type="text" class="form-control" placeholder="Search by title...">
                </div>

                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Image Alt</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($galleries as $gallery)
                        <tr>
                            <td>{{ $index->loop + 1 }}</td>
                            <td>
                                @if ($gallery->image)
                                <img src="{{ asset('storage/' . $gallery->image) }}" style="height: 50px;">
                                @endif
                            </td>
                            <td>{{ $gallery->title }}</td>
                            <td>{{ $gallery->image_alt }}</td>
                            <td>
                                <button wire:click="edit({{ $gallery->id }})" class="btn btn-sm btn-warning">Edit</button>
                                <button wire:click="delete({{ $gallery->id }})" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4">No galleries found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>


    </div>
</div>