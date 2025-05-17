<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header">
                <div class="card-title"> {{ $featureId ? 'Update' : 'Add New' }} Feature</div>
            </div>

            <div class="card-body">
                <form wire:submit.prevent="save">
                    @if (session()->has('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                    @endif

                    <div class="mb-3">
                        <label class="form-label">Icon</label>
                        <div class="preview">
                            @if ($icon)
                            <img src="{{ $icon->temporaryUrl() }}" alt="feature-icon">
                            @elseif ($icon_preview)
                            <img src="{{ asset('storage/' . $icon_preview) }}" alt="feature-icon">
                            @endif
                        </div>
                        <input type="file" class="form-control" wire:model="icon">
                        @error('icon') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" wire:model="title">
                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Text</label>
                        <textarea class="form-control" wire:model="text"></textarea>
                        @error('text') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Counter</label>
                        <input type="text" class="form-control" wire:model="counter">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Counter Icon</label>
                        <input type="text" class="form-control" wire:model="counter_icon">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Color Code</label>
                        <input type="text" class="form-control" wire:model="color_code">
                    </div>

                    <button type="submit" class="btn btn-primary">
                        {{ $featureId ? 'Update' : 'Save' }}
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-7">
        <div class="card">
            <div class="card-header">
                <div class="card-title">About Section</div>
            </div>

            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">

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

                    <input type="text" wire:model.debounce.300ms="search" class="form-control w-25" placeholder="Search...">
                </div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th wire:click="sortBy('id')" style="cursor: pointer;">#</th>
                            <th>Icon</th>
                            <th wire:click="sortBy('title')" style="cursor: pointer;">Title</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($features as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>
                                @if ($item->icon)
                                <img src="{{ asset('storage/' . $item->icon) }}" width="40">
                                @endif
                            </td>
                            <td>{{ $item->title }}</td>
                            <td>
                                <button wire:click="edit({{ $item->id }})" class="btn btn-sm btn-warning">Edit</button>
                                <button wire:click="delete({{ $item->id }})" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">No records found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

                {{ $features->links() }}
            </div>
        </div>
    </div>
</div>