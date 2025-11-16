<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>Testimonial Section Content</h4>
            </div>
            <div class="card-body">
                @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <form wire:submit.prevent="save">

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" wire:model.defer="title" placeholder="e.g., What our clients say about Niwax.">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Subtitle</label>
                        <input type="text" class="form-control" wire:model.defer="subtitle" placeholder="e.g., Over 1200+ Satisfied Clients and Growing.">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Review Platform Title</label>
                        <input type="text" class="form-control" wire:model.defer="review_platform_title" placeholder="e.g., Read More Reviews">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Content</button>
                </form>
            </div>
        </div>
    </div>
</div>