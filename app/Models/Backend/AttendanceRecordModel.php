<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceRecordModel extends Model
{
    use HasFactory;

    protected $table = 'tb_attendance_records'; // ชื่อตาราง

    protected $fillable = [
        'cleaner_id',
        'check_in_time',
        'check_out_time',
        'atten_date',
    ];

    // กำหนดความสัมพันธ์กับโมเดล Cleaner (ถ้ามี)
    public function cleaner()
    {
        return $this->belongsTo(CleanerModel::class, 'cleaner_id');
    }
}