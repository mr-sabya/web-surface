<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">SEO & Analytics Settings</h4>
            </div>
            <div class="card-body">

                @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <form wire:submit.prevent="save">
                    <div class="mb-3">
                        <label class="form-label">Google Analytics ID</label>
                        <input type="text" class="form-control" wire:model="google_analytics_id">
                        @error('google_analytics_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">SEO Title</label>
                        <input type="text" class="form-control" wire:model="seo_title">
                        @error('seo_title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Keywords</label>
                        <input type="text" class="form-control" wire:model="keywords" placeholder="example, demo, test">
                        @error('keywords') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>