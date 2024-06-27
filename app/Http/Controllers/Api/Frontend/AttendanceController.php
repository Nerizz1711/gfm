<?php

namespace App\Http\Controllers\Api\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use \App\Http\Controllers\Api\Apicorefunction;


use App\Models\Backend\CleanerModel;
use App\Models\Backend\CustomerModel;
use App\Models\Backend\AttendanceRecordModel;


class AttendanceController extends Controller
{

    public function getAttendanceFromCleaner(Request $request, $id = null)
    {
        try {
            // Validate the request
            $request->validate([
                'date' => 'required|date',
            ]);
            // Retrieve the date from the request
            $date = $request->input('date');
            // Find cleaner by ID
            $cleaner = CleanerModel::findOrFail($id);
            // Fetch attendance records where cleaner_id matches the provided id and atten_date matches the provided date
            $attendanceRecords = AttendanceRecordModel::where('cleaner_id', $id)
                ->whereDate('atten_date', $date)
                ->with(['cleaner', 'cleaner.customer'])
                ->get();

            return response()->json([
                'message' => 'success',
                'data' => $attendanceRecords,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage(),
            ], 400);
        }
    }


    public function getAttendanceRecords(Request $request, $id = null)
    {
        try {
            // หา attendance record โดยใช้ ID
            $attendanceRecord = AttendanceRecordModel::with(['cleaner', 'cleaner.customer'])
                ->where('id', $id)
                ->first();

            if (!$attendanceRecord) {
                return response()->json([
                    'message' => 'Attendance record not found',
                ], 404);
            }

            // ดึงข้อมูล cleaner และ customer ที่เกี่ยวข้อง
            $cleaner = $attendanceRecord->cleaner;
            $customer = $cleaner ? $cleaner->customer : null;

            return response()->json([
                'message' => 'success',
                'data' => $attendanceRecord,
                'cleaner' => $cleaner,
                'customer' => $customer,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage(),
            ], 400);
        }
    }

    public function notiToCustomer(Request $request, $id = null)
    {
        try {
            // ค้นหา attendance records ที่มี cleaner ซึ่ง customer_id ตรงกับ $id
            $data = AttendanceRecordModel::whereHas('cleaner', function ($query) use ($id) {
                $query->where('customer_id', $id);
            })->with('cleaner.customer')->get();

            // แยกข้อมูลเป็นชุด read และ unread
            $readNotifications = $data->where('noti_status', 'read');
            $unreadNotifications = $data->where('noti_status', 'unread');

            return response()->json([
                'message' => 'success',
                'read' => $readNotifications,
                'unread' => $unreadNotifications,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error',
                'error' => $e->getMessage(),
            ], 400);
        }
    }


    public function updateNotiStatus(Request $request, $id)
    {
        try {
            // รับค่า noti_status จาก request
            $notiStatus = $request->input('noti_status');

            // ค้นหา record ตาม id ที่ได้รับ
            $attendanceRecord = AttendanceRecordModel::findOrFail($id);

            // อัพเดทค่า noti_status
            $attendanceRecord->noti_status = $notiStatus;
            $attendanceRecord->save();

            return response()->json([
                'message' => 'success',
                'data' => $attendanceRecord,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error',
                'error' => $e->getMessage(),
            ], 400);
        }
    }
}
