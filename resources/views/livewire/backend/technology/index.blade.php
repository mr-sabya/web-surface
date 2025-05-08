<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <div class="card-title">{{ $technologyId ? 'Edit Technology' : 'Add Technology' }}</div>
            </div>

            <div class="card-body">
                <form wire:submit.prevent="save">
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" wire:model.live="name" class="form-control">
                        @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label>Slug</label>
                        <input type="text" wire:model="slug" class="form-control">
                        @error('slug') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label>Logo</label>
                        <div class="preview">
                            @if ($newLogo)
                            <img src="{{ $newLogo->temporaryUrl() }}" alt="technology-logo">
                            @elseif ($logo)
                            <img src="{{ asset('storage/' . $logo) }}" alt="technology-logo">
                            @endif
                        </div>
                        <input type="file" wire:model="newLogo" class="form-control">
                        @error('newLogo') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary">{{ $technologyId ? 'Update' : 'Add' }}</button>
                        <button type="button" class="btn btn-secondary" wire:click="resetForm">Cancel</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Technology List</div>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between mb-2">
                    <input type="text" wire:model.debounce.500ms="search" placeholder="Search..." class="form-control w-50">
                    <select wire:model.live="perPage" class="form-select w-auto ms-2">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                    </select>
                </div>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 100px;">#</th>
                            <th>Logo</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($technologies as $index => $tech)
                        <tr>
                            <td class="text-center">{{ ($technologies->currentPage() - 1) * $technologies->perPage() + $index + 1 }}</td>
                            <td><img src="{{ asset('storage/' . $tech->logo) }}" width="50"></td>
                            <td>{{ $tech->name }}</td>
                            <td>{{ $tech->slug }}</td>
                            <td>
                                <button class="btn btn-sm btn-info btn-sm" wire:click="edit({{ $tech->id }})"><i class="fas fa-pencil-alt"></i></button>
                                <button class="btn btn-sm btn-danger btn-sm" wire:click="delete({{ $tech->id }})"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4">No technology found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

                <div>
                    {{ $technologies->links() }}
                </div>
            </div>
        </div>
    </div>
</div>