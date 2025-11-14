<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>Industry Section Content</h4>
            </div>
            <div class="card-body">
                @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <form wire:submit.prevent="save">

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" wire:model.defer="title" placeholder="e.g., We Have Worked Across Multiple Industries">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Subtitle</label>
                        <input type="text" class="form-control" wire:model.defer="subtitle" placeholder="e.g., Industries We Serve">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" wire:model.defer="description" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Content</button>
                </form>
            </div>
        </div>
    </div>
</div>