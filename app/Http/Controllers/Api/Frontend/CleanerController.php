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
            $data = CleanerModel::where(["id" => $id, 'isActive' => 'Y'])
                ->first();

            
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

    public function findCleanerInCustomer(Request $request, $id = null)
    {
        try {
            // Data
            // $data = CleanerModel::where(["id" => $id, 'isActive' => 'Y'])
            //     ->first();

            $customer = CustomerModel::find($id);

            if (!$customer) {
                return response()->json([
                    'message' => 'Customer not found',
                ], 404);
            }

            // Get cleaners of the customer that are active
            $cleaners = $customer->cleaners;
            return response()->json([
                'message' => 'success',
                'data' => $cleaners,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error',
            ], 400);
        }
    }
}
