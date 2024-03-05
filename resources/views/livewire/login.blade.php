<div class="p-1" style="width: 400px">
    <div class="card shadow">
        <div class="px-3 pt-3 d-flex align-items-center">
            <div class="d-inline">
                <h5 class="fw-bold text-uppercase">Log In</h5>
            </div>
            <img src="assets/images/logo.png" alt="logo" class="ms-auto" />
        </div>
        <div class="card-body">
            <form wire:submit="login">
                <label for="email" class="form-label">Email</label>
                <input wire:model="form.email" type="email" class="form-control" name="email" id="email">
                @error('form.email')
                <small class="my-1 text-danger d-block">{{ $message }}</small>
                @enderror

                <label for="password" class="form-label mt-3">Password</label>
                <input wire:model="form.password" type="password" class="form-control" name="password" id="password">
                @error('form.password')
                <small class="my-1 text-danger d-block">{{ $message }}</small>
                @enderror

                {{-- <div class="form-check mb-3 align-items-center d-flex gap-2">
                    <input type="checkbox" name="remember" id="remember" class="form-check-input">
                    <label for="remember" class="form-check-label text-secondary">Remember me</label>
                </div> --}}
                <button class="btn btn-primary w-100 mt-3">Log In</button>
            </form>
        </div>
    </div>
</div>
