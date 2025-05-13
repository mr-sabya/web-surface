<div class="row">
    <div class="col-md-5">

        <div class="card">
            <div class="card-header">
                <div class="card-title">{{ $addonIdBeingUpdated ? 'Edit' : 'Add' }} Addon</div>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="save">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" wire:model.lazy="title" class="form-control @error('title') is-invalid @enderror">
                        @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Text</label>
                        <input type="text" wire:model.lazy="text" class="form-control @error('text') is-invalid @enderror">
                        @error('text') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Icon (Image)</label>
                        <div class="preview">
                            @if ($icon)
                            <img src="{{ $icon->temporaryUrl() }}" alt="icon" width="60">
                            @elseif ($oldIcon)
                            <img src="{{ asset('storage/' . $oldIcon) }}" alt="icon" width="60">
                            @endif
                        </div>
                        <input type="file" wire:model="icon" class="form-control @error('icon') is-invalid @enderror">
                        @error('icon') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">{{ $addonIdBeingUpdated ? 'Update' : 'Save' }}</button>
                        <button type="button" wire:click="resetFields" class="btn btn-secondary">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-7">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Addons</div>
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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($addons as $index => $addon)
                        <tr>
                            <td class="text-center">{{ ($addons->currentPage() - 1) * $addons->perPage() + $index + 1 }}</td>
                            <td>
                                @if($addon->icon)
                                <img src="{{ asset('storage/' . $addon->icon) }}" alt="icon" width="30">
                                @else
                                N/A
                                @endif
                            </td>
                            <td>{{ $addon->title }}</td>
                            <td>
                                <button wire:click="edit({{ $addon->id }})" class="btn btn-sm btn-info"><i class="fas fa-pencil-alt"></i></button>
                                <button wire:click="delete({{ $addon->id }})" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">No data found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

                {{ $addons->links() }}
            </div>
        </div>
    </div>
</div>