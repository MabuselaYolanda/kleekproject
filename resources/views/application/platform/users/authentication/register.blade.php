 <form wire:submit.prevent="register">
     @if (session()->has('error'))
         <script type="application/javascript">
             notie.alert({
                 type: 'error', // optional, default = 4, enum: [1, 2, 3, 4, 5, 'success', 'warning', 'error', 'info', 'neutral']
                 text: '{{ session('error') }}!',
                 date: 'bottom'
             })
             setTimeout(function(){window.location='{{ route('register') }}';}, 3000)
         </script>
     @endif

         @if (session()->has('message'))
             <script type="application/javascript">
                 notie.alert({
                     type: 'info', // optional, default = 4, enum: [1, 2, 3, 4, 5, 'success', 'warning', 'error', 'info', 'neutral']
                     text: '{{ session('message') }}!',
                     date: 'bottom'
                 })
                 setTimeout(function(){window.location='{{ route('login') }}';}, 3000)
             </script>
         @endif


         <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for=""> Name</label><input wire:model="name" class="form-control" placeholder="Name" type="text">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="pre-icon os-icon os-icon-user"></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for=""> Surname</label><input wire:model="surname" class="form-control" placeholder="Surname" type="text">
                        @error('surname')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for=""> Password</label><input wire:model="password" class="form-control" placeholder="Password" type="password">
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="pre-icon os-icon os-icon-fingerprint"></div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for=""> Cellphone Number</label><input wire:model="cellphone"  class="form-control" placeholder="Cellphone Number" type="text">
                        @error('cellphone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="pre-icon os-icon os-icon-phone"></div>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <label for=""> Account Type</label><select wire:model="role" class="form-control">
                    <option>
                        Select Account Type
                    </option>
                    <option value="Business">
                        Business
                    </option>
                    <option value="Buyer">
                        Buyer
                    </option>
                    <option value="Potential">
                        Job Seeker
                    </option>
                </select>
                @error('role')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="pre-icon os-icon os-icon-checkmark"></div>
            </div>
            <div class="buttons-w">
                <button type="submit" class="btn btn-primary">Register Now</button>
            </div>
        </form>
