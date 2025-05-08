<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header">
                <div class="card-title">{{ $serviceProcessId ? 'Edit' : 'Add' }} Service Process</div>
            </div>

            <div class="card-body">
                <form wire:submit.prevent="save">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" wire:model.lazy="title" class="form-control">
                        @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Text</label>
                        <textarea wire:model.lazy="text" class="form-control"></textarea>
                        @error('text') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>

                        <div class="preview">
                            @if ($image)
                            <img src="{{ $image->temporaryUrl() }}" alt="process-image">
                            @elseif ($oldImage)
                            <img src="{{ asset('storage/' . $oldImage) }}" alt="process-image">
                            @endif
                        </div>
                        <input type="file" wire:model="image" class="form-control">
                        @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <button class="btn btn-primary" type="submit">Save</button>
                    <button class="btn btn-secondary" type="button" wire:click="resetForm">Cancel</button>
                </form>
            </div>
        </div>

    </div>

    <div class="col-md-7">

        <div class="card">
            <div class="card-header">
                <div class="card-title">Service Process</div>
            </div>

            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <div class="d-flex align-items-center gap-2">
                        <label class="me-2">Show</label>
                        <select wire:model.live="perPage" class="form-select w-auto">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>

                    <input type="text" wire:model.debounce.300ms="search" class="form-control w-50" placeholder="Search...">
                </div>

                @if (session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 100px;">#</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Text</th>
                            <th width="120">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($processes as $index => $process)
                        <tr>
                            <td class="text-center">{{ ($processes->currentPage() - 1) * $processes->perPage() + $index + 1 }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $process->image) }}" width="50">
                            </td>
                            <td>{{ $process->title }}</td>
                            <td>{{ $process->text }}</td>
                            <td>
                                <button class="btn btn-sm btn-warning" wire:click="edit({{ $process->id }})">Edit</button>
                                <button class="btn btn-sm btn-danger" wire:click="delete({{ $process->id }})"
                                    onclick="confirm('Are you sure?') || event.stopImmediatePropagation()">Delete</button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">No service processes found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

                {{ $processes->links() }}
            </div>
        </div>
    </div>
</div>