<div class="card">

    <div class="card-header">
        <h4>Banner Settings</h4>
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

            <input type="text" wire:model.debounce.500ms="search" class="form-control w-25" placeholder="Search title...">
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th wire:click="sortBy('id')" style="cursor:pointer; width: 100px;" class="text-center">
                        ID
                        @if ($sortField === 'id')
                        @if ($sortDirection === 'asc')
                        <i class="fa fa-arrow-up"></i>
                        @else
                        <i class="fa fa-arrow-down"></i>
                        @endif
                        @endif
                    </th>
                    <th>Image</th>
                    <th wire:click="sortBy('title')" style="cursor: pointer;">
                        Title
                        @if ($sortField === 'title')
                        @if ($sortDirection === 'asc')
                        <i class="fa fa-arrow-up"></i>
                        @else
                        <i class="fa fa-arrow-down"></i>
                        @endif
                        @endif
                    </th>
                    <th>Slug</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($services as $index => $service)
                <tr>
                    <td class="text-center">{{ ($services->currentPage() - 1) * $services->perPage() + $index + 1 }}</td>
                    <td>
                        @if($service->image)
                        <img src="{{ asset('storage/' . $service->image) }}" width="60">
                        @endif
                    </td>
                    <td>{{ $service->title }}</td>
                    <td>{{ $service->slug }}</td>

                    <td>
                        <a href="{{ route('admin.service.show', $service->id) }}" class="btn btn-sm btn-primary" wire:navigate><i class="fas fa-eye"></i></a>
                        <a href="{{ route('admin.service.edit', $service->id) }}" class="btn btn-sm btn-info" wire:navigate><i class="fas fa-pencil-alt"></i></a>
                        <button wire:click="delete({{ $service->id }})" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">No services found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        {{ $services->links() }}
    </div>
</div>