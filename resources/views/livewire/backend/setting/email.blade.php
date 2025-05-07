<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Email Settings (SMTP)</h4>
            </div>
            <div class="card-body">
                @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <form wire:submit.prevent="save">
                    <div class="mb-3">
                        <label class="form-label">SMTP Host</label>
                        <input type="text" class="form-control" wire:model="smtp_host">
                        @error('smtp_host') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">SMTP Port</label>
                        <input type="number" class="form-control" wire:model="smtp_port">
                        @error('smtp_port') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">SMTP Username</label>
                        <input type="text" class="form-control" wire:model="smtp_username">
                        @error('smtp_username') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">SMTP Password</label>
                        <input type="password" class="form-control" wire:model="smtp_password">
                        @error('smtp_password') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>