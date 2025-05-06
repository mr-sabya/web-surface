<div class="row">
    <div class="col-lg-6">

        <div class="card">
            <div class="card-header">
                <div class="card-title">General Settings</div>
            </div>

            <div class="card-body">

                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif

                <form wire:submit.prevent="save">

                    <!-- Site Title -->
                    <div class="mb-3">
                        <label for="site_title" class="form-label">Site Title</label>
                        <input type="text" id="site_title" class="form-control" wire:model="site_title">
                        @error('site_title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Tagline -->
                    <div class="mb-3">
                        <label for="tagline" class="form-label">Tagline</label>
                        <input type="text" id="tagline" class="form-control" wire:model="tagline">
                        @error('tagline') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" class="form-control" wire:model="email">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Phone -->
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" id="phone" class="form-control" wire:model="phone">
                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Address -->
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea id="address" class="form-control" rows="3" wire:model="address"></textarea>
                        @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Logo Upload -->
                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo</label>
                        <div class="preview">
                            @if($logo)
                            <img src="{{ $logo->temporaryUrl() }}" alt="Logo" width="100">
                            @elseif ($logo_preview)
                            <img src="{{ asset('storage/' . $logo_preview) }}" alt="Logo" width="100">
                            @endif
                        </div>
                        <input type="file" id="logo" class="form-control" wire:model="logo">
                        @error('logo') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- White Logo Upload -->
                    <div class="mb-3">
                        <label for="white_logo" class="form-label">White Logo</label>
                        <div class="preview">
                            @if ($white_logo)
                            <img src="{{ $white_logo->temporaryUrl() }}" alt="White Logo" width="100">
                            @elseif ($white_logo_preview)
                            <img src="{{ asset('storage/' . $white_logo_preview) }}" alt="White Logo" width="100">
                            @endif
                        </div>
                        <input type="file" id="white_logo" class="form-control" wire:model="white_logo">
                        @error('white_logo') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Favicon Upload -->
                    <div class="mb-3">
                        <label for="favicon" class="form-label">Favicon</label>
                        <div class="preview">
                            @if ($favicon)
                            <img src="{{ $favicon->temporaryUrl() }}" alt="Favicon" width="50">
                            @elseif ($favicon_preview)
                            <img src="{{ asset('storage/' . $favicon_preview) }}" alt="Favicon" width="50">
                            @endif
                        </div>
                        <input type="file" id="favicon" class="form-control" wire:model="favicon">
                        @error('favicon') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>

            </div>
        </div>

    </div>
</div>