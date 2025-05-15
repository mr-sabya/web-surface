<div class="card">

    <div class="card-header">
        <div class="card-title">Portfolio List</div>
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

        <div class="table-responsive">
            <table class="table table-bordered table-hover mb-0">
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
                        <th wire:click="sortBy('name')" style="cursor:pointer">
                            Name
                            @if($sortField == 'name')
                            <i class="fa fa-{{ $sortDirection == 'asc' ? 'arrow-up' : 'arrow-down' }}"></i>
                            @endif
                        </th>
                        <th wire:click="sortBy('service_id')" style="cursor:pointer">
                            Service
                            @if($sortField == 'service_id')
                            <i class="fa fa-{{ $sortDirection == 'asc' ? 'arrow-up' : 'arrow-down' }}"></i>
                            @endif
                        </th>
                        <th wire:click="sortBy('client_id')" style="cursor:pointer">
                            Client
                            @if($sortField == 'client_id')
                            <i class="fa fa-{{ $sortDirection == 'asc' ? 'arrow-up' : 'arrow-down' }}"></i>
                            @endif
                        </th>
                        <th wire:click="sortBy('start_date')" style="cursor:pointer">
                            Dates
                            @if($sortField == 'start_date')
                            <i class="fa fa-{{ $sortDirection == 'asc' ? 'arrow-up' : 'arrow-down' }}"></i>
                            @endif
                        </th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($portfolios as $index => $item)
                    <tr>
                        <td class="text-center">{{ ($portfolios->currentPage() - 1) * $portfolios->perPage() + $index + 1 }}</td>
                        <td><img src="{{ asset('storage/' . $item->image) }}" width="50"></td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->service->title ?? '-' }}</td>
                        <td>{{ $item->client->name ?? '-' }}</td>
                        <td>{{ $item->start_date }} to {{ $item->end_date }}</td>
                        <td>
                            <span class="badge {{ $item->status ? 'bg-success' : 'bg-secondary' }}">
                                {{ $item->status ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('admin.portfolio.edit', $item->id) }}" wire:navigate class="btn btn-sm btn-info"><i class="fas fa-pencil-alt"></i></a>
                            <button class="btn btn-sm btn-danger" wire:click="delete({{ $item->id }})"
                                onclick="confirm('Delete this item?') || event.stopImmediatePropagation()">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center">No records found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            {{ $portfolios->links() }}
        </div>
    </div>
</div>