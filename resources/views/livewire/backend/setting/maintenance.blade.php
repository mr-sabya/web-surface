<div class="row">
    <div class="col-lg-6">

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Maintenance Settings</h4>
            </div>
            <div class="card-body">

                @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <form wire:submit.prevent="save">

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="maintanace_mode" wire:model="maintanace_mode" value="1">
                        <label class="form-check-label" for="maintanace_mode">Enable Maintenance Mode</label>
                        @error('maintanace_mode') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Maintenance Message</label>
                        <textarea class="form-control" wire:model="maintanace_message" rows="3" placeholder="Message shown during maintenance..."></textarea>
                        @error('maintanace_message') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Save Changes</button>

                </form>
            </div>
        </div>

    </div>
</div>