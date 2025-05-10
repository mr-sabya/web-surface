<div>
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">{{ $serviceFeatureId ? 'Edit Feature' : 'Add Feature' }}</div>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="save">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" wire:model.defer="title" class="form-control">
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Text</label>
                            <textarea wire:model.defer="text" class="form-control"></textarea>
                            @error('text') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Icon Image</label>

                            <div class="preview">
                                @if ($icon)
                                <img src="{{ $icon->temporaryUrl() }}" alt="icon">
                                @elseif ($oldIcon)
                                <img src="{{ asset('storage/' . $oldIcon) }}" alt="icon">
                                @endif
                            </div>
                            <input type="file" wire:model="icon" class="form-control">
                            @error('icon') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>


                        <button type="submit" class="btn btn-primary">
                            {{ $serviceFeatureId ? 'Update' : 'Add' }}
                        </button>
                        <button type="button" wire:click="resetForm" class="btn btn-secondary">Cancel</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-title">
                        Features ({{ $perPage }} per page)
                    </div>

                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3 align-items-center">
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

                        <div>
                            <input type="text" class="form-control" wire:model.debounce.300ms="search" placeholder="Search...">
                        </div>
                    </div>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 100px;">#</th>
                                <th>Icon</th>
                                <th>Title</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($features as $index => $feature)
                            <tr>
                                <td class="text-center">{{ ($features->currentPage() - 1) * $features->perPage() + $index + 1 }}</td>
                                <td><img src="{{ asset('storage/' . $feature->icon) }}" width="40"></td>
                                <td>{{ $feature->title }}</td>
                                <td>
                                    <button wire:click="edit({{ $feature->id }})" class="btn btn-sm btn-info"><i class="fas fa-pencil-alt"></i></button>
                                    <button wire:click="delete({{ $feature->id }})" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center">No features found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div>{{ $features->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</div>