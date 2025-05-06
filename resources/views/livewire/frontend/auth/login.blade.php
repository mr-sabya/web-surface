<div class="login-form-div">
    <h4 class="mb40 text-center">Login to your Account</h4>

    @if (session()->has('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    @if (session()->has('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="form-block">
        <form wire:submit.prevent="login">
            <div class="fieldsets row">
                <div class="col-md-12 form-group">
                    <input type="email" wire:model.lazy="email" placeholder="Email" class="form-control">
                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-12 form-group">
                    <input type="password" wire:model.lazy="password" placeholder="Password" class="form-control">
                    @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            </div>

            <div class="fieldsets row mt20">
                <div class="col-md-6 form-group v-center">
                    <button type="submit" class="lnk btn-main bg-btn">Submit <span class="circle"></span></button>
                </div>
                <div class="col-md-6 form-group v-center text-right">
                    <a href="#" class="psforgt">Forgot Password?</a>
                </div>
            </div>

            <hr class="mt30 mb30">
            <div class="text-center">
                <p class="mb20">or Login with:</p>
                <div class="social-btnnxx">
                    <a href="#" class="btn-main fb-btn"><i class="fab fa-facebook-f"></i> Facebook</a>
                    <a href="#" class="btn-main google-btn"><i class="fab fa-google"></i> Google</a>
                </div>
            </div>
        </form>
    </div>
</div>