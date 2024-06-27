<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShiftModel extends Model
{
    use HasFactory;

    protected $table = 'tb_shifts';

    protected $fillable = ['name', 'start_time', 'end_time', 'customer_id'];

    public function customer()
    {
        return $this->belongsTo(CustomerModel::class, 'customer_id');
    }
    
    public function cleaners()
    {
        return $this->hasMany(CleanerModel::class, 'shift_id', 'id');
    }
}
