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
                <input wire:model="form.email" type="email" class="form-control" id="email">
                @error('form.email')
                <small class="my-1 text-danger d-block">{{ $message }}</small>
                @enderror

                <label for="password" class="form-label mt-3">Password</label>
                <input wire:model="form.password" type="password" class="form-control" id="password">
                @error('form.password')
                <small class="my-1 text-danger d-block">{{ $message }}</small>
                @enderror

                <button type="submit" class="btn btn-primary w-100 mt-3">Log In</button>
            </form>
        </div>
    </div>
</div>
