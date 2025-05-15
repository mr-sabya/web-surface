<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Testimonial List</div>
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
                            <th wire:click="sortBy('id')" style="cursor: pointer;" class="text-center">
                                #
                                @if($sortField == 'id')
                                <i class="fa fa-{{ $sortDirection == 'asc' ? 'arrow-up' : 'arrow-down' }}"></i>
                                @endif
                            </th>
                            <th wire:click="sortBy('name')" style="cursor: pointer;">
                                Name
                                @if($sortField == 'name')
                                <i class="fa fa-{{ $sortDirection == 'asc' ? 'arrow-up' : 'arrow-down' }}"></i>
                                @endif
                            </th>
                            <th wire:click="sortBy('company')" style="cursor: pointer;">
                                Company
                                @if($sortField == 'company')
                                <i class="fa fa-{{ $sortDirection == 'asc' ? 'arrow-up' : 'arrow-down' }}"></i>
                                @endif
                            </th>
                            <th>Rating</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($testimonials as $index => $testimonial)
                        <tr>
                            <td class="text-center">{{ ($testimonials->currentPage() - 1) * $testimonials->perPage() + $index + 1 }}</td>
                            <td>{{ $testimonial->name }}</td>
                            <td>{{ $testimonial->company }}</td>
                            <td>{{ $testimonial->rating }}</td>
                            <td>
                                <span class="badge bg-{{ $testimonial->is_active ? 'success' : 'secondary' }}">
                                    {{ $testimonial->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('admin.testimonial.edit', $testimonial->id) }}" wire:navigate class="btn btn-sm btn-info"><i class="fas fa-pencil-alt"></i></a>
                                <button class="btn btn-sm btn-danger" wire:click="delete({{ $testimonial->id }})"
                                    onclick="confirm('Delete this item?') || event.stopImmediatePropagation()">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $testimonials->links() }}
            </div>
        </div>
    </div>
</div>