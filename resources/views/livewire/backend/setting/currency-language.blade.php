<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Currency & Language Settings</h4>
            </div>
            <div class="card-body">
                @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <form wire:submit.prevent="save">
                    <!-- Currency Symbol -->
                    <div class="mb-3">
                        <label class="form-label">Currency Symbol</label>
                        <select class="form-control" wire:model="currency_symbol">
                            <option value="">Select Currency</option>
                            @foreach($currencyOptions as $currency)
                            <option value="{{ $currency }}">{{ $currency }}</option>
                            @endforeach
                        </select>
                        @error('currency_symbol') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Language -->
                    <div class="mb-3">
                        <label class="form-label">Language</label>
                        <select class="form-control" wire:model="language">
                            <option value="">Select Language</option>
                            @foreach($languageOptions as $lang)
                            <option value="{{ $lang }}">{{ $lang }}</option>
                            @endforeach
                        </select>
                        @error('language') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Timezone -->
                    <div class="mb-3">
                        <label class="form-label">Timezone</label>
                        <select class="form-control" wire:model="timezone">
                            <option value="">Select Timezone</option>
                            @foreach($timezoneOptions as $tz)
                            <option value="{{ $tz }}">{{ $tz }}</option>
                            @endforeach
                        </select>
                        @error('timezone') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>