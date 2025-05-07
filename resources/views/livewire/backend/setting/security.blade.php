<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Security Settings</h4>
            </div>
            <div class="card-body">
                @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <form wire:submit.prevent="save">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="twoFactor" wire:model="two_factor_auth_enabled">
                        <label class="form-check-label" for="twoFactor">
                            Enable Two-Factor Authentication
                        </label>
                        @error('two_factor_auth_enabled') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="maxAttempts" class="form-label">Max Failed Login Attempts</label>
                        <input type="number" id="maxAttempts" class="form-control" wire:model="max_failed_login_attempts" min="1">
                        @error('max_failed_login_attempts') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>