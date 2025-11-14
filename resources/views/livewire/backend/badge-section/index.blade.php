<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>Badge Section Content</h4>
            </div>
            <div class="card-body">
                @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <form wire:submit.prevent="save">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" wire:model.defer="title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Subtitle</label>
                        <input type="text" class="form-control" wire:model.defer="subtitle">
                    </div>
                    
                    <hr>
                    <h5>Call to Action (CTA)</h5>
                    <div class="mb-3">
                        <label class="form-label">CTA Text</label>
                        <input type="text" class="form-control" wire:model.defer="cta_text" placeholder="e.g., We Promise. We Deliver.">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Button Text</label>
                        <input type="text" class="form-control" wire:model.defer="cta_button_text">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Button Link</label>
                        <input type="text" class="form-control" wire:model.defer="cta_button_link">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Content</button>
                </form>
            </div>
        </div>
    </div>
</div>