<?php

namespace App\Http\Livewire\Platform\Users\Authentication;

use App\Models\User;
use Livewire\Component;
use App\Http\Traits\Contactable;
use Illuminate\Support\Facades\Auth;
use Spatie\Geocoder\Geocoder;

class Profile extends Component
{
    use Contactable;
    public $identity;
    public $address;

    public function submit(){
        $this->validate([
            'identity' => 'required|min:13|max:13',
            'address' => 'required'
        ]);

                $user = User::where('user', Auth::user()->user)->first();
                    if($user::find(Auth::user()->user)->profile){
                        session()->flash('error', 'Hi, you cannot enrol a profile as you have a profile already existing within the system');
                    }else{

                        $client = new \GuzzleHttp\Client();

                        $geocoder = new Geocoder($client);

                        $geocoder->setApiKey(config('geocoder.key'));

                        $geocoder->setCountry(config('geocoder.country', 'ZA'));

                        $lats = $geocoder->getCoordinatesForAddress($this->address);


                        \App\Models\Profile::create([
                            'user' => Auth::user()->user,
                            'avatar' => (new \Laravolt\Avatar\Avatar)->create(Auth::user()->name .' '.Auth::user()->surname)->toGravatar(),
                            'identity_number' => $this->identity,
                            'address' => $this->address,
                            'latitude' => $lats['lat'],
                            'longitude' => $lats['lng']
                        ])->profile;

                        return redirect(route('dashboard'));
                    }
    }


    public function render()
    {
        return view('livewire.platform.users.authentication.profile');
    }
}
