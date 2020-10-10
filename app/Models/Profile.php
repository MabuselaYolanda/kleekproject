<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;


    protected $table = 'profiles';

    protected $fillable = ['user', 'avatar', 'identity_number', 'address', 'latitude', 'longitude'];

    public function user(){
        return $this->belongsTo(User::class, 'user', 'user');
    }
}
