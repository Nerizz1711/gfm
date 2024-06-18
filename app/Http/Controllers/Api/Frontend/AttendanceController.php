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

    public function getAttendanceFromCustomer(Request $request, $id = null)
    {
        try {
            // หา customer โดยใช้ ID
            $customer = CustomerModel::findOrFail($id);

            // ดึงข้อมูล attendance records ที่เกี่ยวข้องกับ customer นี้
            $attendanceRecords = AttendanceRecordModel::whereHas('cleaner', function ($query) use ($id) {
                $query->where('customer_id', $id);
            })
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

    public function findAttendanceCustomer(Request $request, $id = null)
    {
        try {
            // Data
            // $data = CleanerModel::where(["id" => $id, 'isActive' => 'Y'])
            //     ->first();

            $data = AttendanceRecordModel::with(['cleaner.customer'])->findOrFail($id);

            return response()->json([
                'message' => 'success',
                'data' => $data,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error',
            ], 400);
        }
    }
}
