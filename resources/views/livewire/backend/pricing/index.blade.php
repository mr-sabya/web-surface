<div class="row">
    <div class="col-md-5">

        <div class="card">
            <div class="card-header">
                <div class="card-title">{{ $pricingIdBeingUpdated ? 'Edit' : 'Add' }} Pricing</div>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="save">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" wire:model.lazy="title" class="form-control @error('title') is-invalid @enderror">
                        @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Subtitle</label>
                        <input type="text" wire:model.lazy="sub_title" class="form-control @error('sub_title') is-invalid @enderror">
                        @error('sub_title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Price Start</label>
                        <input type="number" wire:model.lazy="price_start" class="form-control @error('price_start') is-invalid @enderror">
                        @error('price_start') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Price End</label>
                        <input type="number" wire:model.lazy="price_end" class="form-control @error('price_end') is-invalid @enderror">
                        @error('price_end') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Duration</label>
                        <input type="text" wire:model.lazy="duration" class="form-control @error('duration') is-invalid @enderror">
                        @error('duration') <div class="invalid-feedback">{{ $message }}</div> @enderror
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
                        <button type="submit" class="btn btn-primary">{{ $pricingIdBeingUpdated ? 'Update' : 'Save' }}</button>
                        <button type="button" wire:click="resetFields" class="btn btn-secondary">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-7">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Pricings</div>
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

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Sub Title</th>
                            <th>Price</th>
                            <th>Icon</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pricings as $index => $pricing)
                        <tr>
                            <td class="text-center">{{ ($pricings->currentPage() - 1) * $pricings->perPage() + $index + 1 }}</td>
                            <td>{{ $pricing->title }}</td>
                            <td>{{ $pricing->sub_title }}</td>
                            <td>${{ $pricing->price_start }} - ${{ $pricing->price_end }}</td>
                            <td>
                                @if($pricing->icon)
                                <img src="{{ asset('storage/' . $pricing->icon) }}" alt="icon" width="30">
                                @else
                                N/A
                                @endif
                            </td>
                            <td>
                                <button wire:click="edit({{ $pricing->id }})" class="btn btn-sm btn-info">Edit</button>
                                <button wire:click="delete({{ $pricing->id }})" class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">No data found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

                {{ $pricings->links() }}
            </div>
        </div>
    </div>
</div>