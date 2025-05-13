<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header">
                <div class="card-title">{{ $featureIdBeingUpdated ? 'Edit' : 'Add' }} Feature</div>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="save">
                    <div class="mb-3">
                        <label class="form-label">Feature Text</label>
                        <input type="text" wire:model.lazy="text" class="form-control @error('text') is-invalid @enderror">
                        @error('text') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">{{ $featureIdBeingUpdated ? 'Update' : 'Save' }}</button>
                        <button type="button" wire:click="resetFields" class="btn btn-secondary">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-7">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Features</div>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between mb-3">
                    <div class="d-flex align-items-center gap-2">
                        <label>Show</label>
                        <select wire:model.live="perPage" class="form-select w-auto">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                        </select>
                    </div>

                    <input type="text" wire:model.debounce.300ms="search" class="form-control w-50" placeholder="Search...">
                </div>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Feature Text</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($features as $index => $feature)
                        <tr>
                            <td>{{ ($features->currentPage() - 1) * $features->perPage() + $index + 1 }}</td>
                            <td>{{ $feature->text }}</td>
                            <td>
                                <button wire:click="edit({{ $feature->id }})" class="btn btn-sm btn-info"><i class="fas fa-pencil-alt"></i></button>
                                <button wire:click="delete({{ $feature->id }})" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center">No features found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

                {{ $features->links() }}
            </div>
        </div>
    </div>
</div>