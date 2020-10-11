<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Provider\en_ZA\Person;
use Faker\Provider\en_ZA\PhoneNumber;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    $number = 0;
        do {
            $number++;

            User::create([
                'user' =>  md5(Str::random(32) .  Str::orderedUuid()),
                'name' => Person::firstNameMale(),
                'surname' => Person::firstNameMale(),
                'cellphone' => PhoneNumber::cellphoneCode(),
                'role' => 'Potential',
                'password' => Hash::make(Str::random())
            ]);
        }while($number <= 100);
    }
}
