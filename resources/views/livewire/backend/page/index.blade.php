<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Pages</h5>

        <div class="d-flex">
            <input class="form-control form-control-sm me-2" placeholder="Search..."
                wire:model.debounce.400ms="search">
        </div>
    </div>

    @if (session()->has('message'))
    <div class="alert alert-success mx-3 my-2">{{ session('message') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-hover mb-0">
            <thead class="table-light">
                <tr>
                    <th wire:click="sortBy('title')" style="cursor:pointer">
                        Title @if($sortField==='title')<i class="bi bi-caret-{{$sortAsc?'up':'down'}}-fill"></i>@endif
                    </th>
                    <th>Slug</th>
                    <th wire:click="sortBy('is_published')" style="cursor:pointer">
                        Published @if($sortField==='is_published')<i class="bi bi-caret-{{$sortAsc?'up':'down'}}-fill"></i>@endif
                    </th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pages as $row)
                <tr>
                    <td>{{ $row->title }}</td>
                    <td>{{ $row->slug }}</td>
                    <td>
                        <span class="badge bg-{{ $row->is_published ? 'success':'secondary' }}">
                            {{ $row->is_published ? 'Yes':'No' }}
                        </span>
                    </td>
                    <td class="text-end">
                        <a href="{{ route('admin.page.edit',$row->id) }}" wire:navigate class="btn btn-sm btn-outline-primary">Edit</a>
                        <button class="btn btn-sm btn-outline-danger" wire:click="confirmDelete({{ $row->id }})">
                            Delete
                        </button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center py-4">No pages found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="card-footer">{{ $pages->links() }}</div>

    {{-- inline delete modal --}}
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title">Delete Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">Are you sure? This action can’t be undone.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-danger" wire:click="destroy">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    Livewire.on('show-delete', () => {
        new bootstrap.Modal(document.getElementById('deleteModal')).show();
    });
</script>
@endpush