<?php

namespace App\Models\Authuse;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable;

use Laravel\Sanctum\HasApiTokens;

class Cleaner extends Authenticatable
{
    // Your existing code
    use HasFactory, Notifiable, HasApiTokens;



    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */


    protected $table = 'tb_cleaner'; // Your table name

    protected $fillable = [
        'phone',
        'name',
        'email',
        'password',
        'line_id',
        'avatar',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function fullname()
    {
        return $this->firstname . ' ' . $this->lastname;
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
