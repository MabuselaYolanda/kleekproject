<form wire:submit.prevent="enrol">
    <h5 class="form-header">
        Business Creation
    </h5>
    <div class="form-desc">
        Hi {{ Auth::user()->name }} we detected that {{ env('APP_NAME') }} is currently in demo mode as such all system data is loaded incrementally in the background
    </div>
    <div class="form-group">
        <label for=""> Name of Business</label><input class="form-control" wire:model="name" placeholder="Enter your business name" type="text">

        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for=""> Type Of Business</label><select wire:model="type" class="form-control">
            <option>
                Select Business Type
            </option>
            <option value="e-commerce">
                Ecommerce Business
            </option>
            <option value="event">
                Events Management Business
            </option>
            <option value="spaza">
                Spaza Shop
            </option>
            <option value="supermarket">
                Supermarket
            </option>
            <option value="catering">
                Catering Business
            </option>
        </select>
        @error('type')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for=""> Established</label><input wire:model="established" class="form-control" placeholder="When was your business established" type="text">

        @error('established')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <fieldset class="form-group">
        <legend><span>About Your Business</span></legend>

        <div class="form-group">
            <label> About Your Business</label><textarea wire:model="about" class="form-control" rows="3"></textarea>
            @error('about')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </fieldset>
    <div class="form-buttons-w">
        <button class="btn btn-primary" type="submit"> Submit</button>
    </div>
</form>
