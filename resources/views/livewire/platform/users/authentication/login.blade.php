@if (session()->has('error'))
    <script type="application/javascript">
        notie.alert({
            type: 'error', // optional, default = 4, enum: [1, 2, 3, 4, 5, 'success', 'warning', 'error', 'info', 'neutral']
            text: '{{ session('error') }}!',
            date: 'bottom'
        })
        setTimeout(function(){window.location='{{ route('login') }}';}, 3000)
    </script>
@endif

<form wire:submit.prevent="login">
    <div class="form-group">
        <label for="">Cellphone</label><input class="form-control" wire:model="cellphone" placeholder="Enter your cellphone number" type="text">
        @error('cellphone')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="pre-icon os-icon os-icon-user-male-circle"></div>
    </div>
    <div class="form-group">
        <label for="">Password</label><input class="form-control" placeholder="Enter your password" wire:model="password" type="password">
        @error('password')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="pre-icon os-icon os-icon-fingerprint"></div>
    </div>
    <div class="buttons-w">
        <button type="submit" class="btn btn-primary">Login</button>
    </div>
</form>
