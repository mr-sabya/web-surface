<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header">
                <h4>Office Section Content</h4>
            </div>
            <div class="card-body">
                @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <form wire:submit.prevent="save">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" wire:model.defer="title" placeholder="e.g., Our Locations">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Subtitle</label>
                        <input type="text" class="form-control" wire:model.defer="subtitle" placeholder="e.g., Our Office">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Content</button>
                </form>
            </div>
        </div>
    </div>
</div>