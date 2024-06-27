<?php

namespace App\Http\Controllers\Api\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use \App\Http\Controllers\Api\Apicorefunction;


use App\Models\Backend\CleanerModel;
use App\Models\Backend\CustomerModel;

class CleanerController extends Controller
{

    public function getCleaner(Request $request)
    {
        try {
            $data = CleanerModel::where('isActive', 'Y')->get();

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

    public function findCleaner(Request $request, $id = null)
    {
        try {
            // Data
            $data = CleanerModel::with(['customer', 'shift'])
                ->where(["id" => $id, 'isActive' => 'Y'])
                ->first();

            if (!$data) {
                return response()->json([
                    'message' => 'Cleaner not found or inactive',
                ], 404);
            }

            return response()->json([
                'message' => 'success',
                'data' => $data,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error',
                'error' => $e->getMessage(),
            ], 400);
        }
    }

    public function findCleanerInCustomer(Request$request, $id = null)
    {
        try {
            // Extract customer_id from the request
            $customerId = $id;

            // Data
            $data = CleanerModel::with(['customer', 'shift'])
                ->where(['customer_id' => $customerId, 'isActive' => 'Y'])
                ->get();

            if (!$data) {
                return response()->json([
                    'message' => 'Cleaner not found or inactive',
                ], 404);
            }

            return response()->json([
                'message' => 'success',
                'data' => $data,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error',
                'error' => $e->getMessage(),
            ], 400);
        }
    }

}
