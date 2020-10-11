<form wire:submit.prevent="submit">
    <div class="form-desc">
        Please enter your use profile information before we can redirect you to your dashboard
    </div>
    <div class="form-group">
        <label for=""> Identity Number</label><input wire:model.defer="identity" class="form-control" placeholder="Your Identity Number" type="text">
        @error('identity')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label for=""> Address</label><input wire:model.defer="address"  id="address" class="form-control" placeholder="Your Home Address" type="text">
                @error('address')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
    <div class="form-buttons-w">
        <button class="btn btn-primary" type="submit"> Submit</button>
    </div>
</form>

@section('javascript')
    <script>
        var placesAutocomplete = places({
            appId: 'plVY1KEL1Y98',
            apiKey: 'cb018db4e6ab2444fa54b2f08ce61d5b',
            container: document.querySelector('#address')
        });
    </script>
@stop
