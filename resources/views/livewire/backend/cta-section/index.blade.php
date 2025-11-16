<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header">
                <h4>Call to Action (CTA) Section</h4>
            </div>
            <div class="card-body">
                @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <form wire:submit.prevent="save">
                    <div class="row">

                        <div class="col-md-12 mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" wire:model.defer="title" placeholder="e.g., Let's work together">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Subtitle</label>
                            <input type="text" class="form-control" wire:model.defer="subtitle" placeholder="e.g., We Love to Listen to Your Requirements">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Button Text</label>
                            <input type="text" class="form-control" wire:model.defer="button_text" placeholder="e.g., GET STARTED">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Button Link</label>
                            <input type="url" class="form-control" wire:model.defer="button_link" placeholder="e.g., https://example.com/contact">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Secondary Text</label>
                            <input type="text" class="form-control" wire:model.defer="secondary_text" placeholder="e.g., Or call us now">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Phone Number (Display)</label>
                            <input type="text" class="form-control" wire:model.defer="phone_number" placeholder="e.g., (123) 456 7890">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Phone Link (tel:)</label>
                            <input type="text" class="form-control" wire:model.defer="phone_link" placeholder="e.g., +11234567890">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-2">Save Content</button>
                </form>
            </div>
        </div>
    </div>
</div>