<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'address_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Returns the caretakes that are near to this user
     */
    public function getNearbyCaretakers()
    {

        
        
        return Address::where('city', $this->address->city)->get();
        // return Address::where('city', $this->address)
        // ->get();


        
        // TODO: Once we have an address model:
        // return CareTaker::where('city', $this->address->city)->get();
        // $users = User::join('addresses', 'users.address_id', '=', 'addresses.id')
        // ->select('users.name')
        // ->where('users.address_id', $this->city)
        // ->get();
        // return $users;
    }

    public function address()
    {
        return $this->hasOne(Address::class);
    }

    public function patient()
    {
        return $this->hasOne(Patient::class);
    }

    public function caretaker()
    {
        return $this->hasOne(CareTaker::class);
    }
}


