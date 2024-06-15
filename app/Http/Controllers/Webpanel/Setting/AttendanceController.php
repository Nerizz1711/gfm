<?php

namespace App\Http\Controllers\Webpanel\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\AttendanceRecordModel;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function checkIn()
    {
        $user = Auth::user();
        $today = Carbon::today()->toDateString();

        $attendance = AttendanceRecordModel::firstOrCreate(
            [
                'user_id' => $user->id,
                'date' => $today,
            ],
            [
                'check_in_time' => Carbon::now(),
            ]
        );

        return response()->json(['message' => 'Check-in time recorded', 'attendance' => $attendance]);
    }

    public function checkOut()
    {
        $user = Auth::user();
        $today = Carbon::today()->toDateString();

        $attendance = AttendanceRecordModel::where('user_id', $user->id)
            ->where('date', $today)
            ->first();

        if ($attendance) {
            $attendance->update([
                'check_out_time' => Carbon::now(),
            ]);

            return response()->json(['message' => 'Check-out time recorded', 'attendance' => $attendance]);
        }

        return response()->json(['message' => 'No check-in record found for today'], 404);
    }
}
