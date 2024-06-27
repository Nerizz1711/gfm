<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\Helper;
use Illuminate\Support\Facades\Auth;

class CustomerModel extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tb_customer';
    protected $fillable = [
        'phone',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'token_line',
    ];
    public function fullname()
    {
        return $this->firstname . ' ' . $this->lastname;
    }

    public function cleaners()
    {
        return $this->hasMany(CleanerModel::class, 'customer_id', 'id');
    }

    public function shifts()
    {
        return $this->hasMany(ShiftModel::class);
    }

    public function attendances()
    {
        return $this->hasMany(AttendanceRecordModel::class, 'customer_id', 'id');
    }
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
}
