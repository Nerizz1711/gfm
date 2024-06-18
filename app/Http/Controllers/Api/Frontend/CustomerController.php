<?php

namespace App\Http\Controllers\Api\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Backend\CustomerModel;
use Illuminate\Support\Facades\DB;
use \App\Http\Controllers\Api\Apicorefunction;

class CustomerController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('user')->attempt($credentials)) {
            $user = Auth::guard('user')->user();

            $user->tokens()->delete();
            $token = $user->createToken('user', ['User'])->plainTextToken;

            return response()->json([
                "message" => "success",
                'access_token' => $token,
                "token_type" => "Bearer",
                "data" => $user,
            ]);
        }

        return response()->json(['error' => 'Invalid credentials'], 401);
    }

    public function getCustomer(Request $request)
    {
        try {
            // Data
            // $categorys = Shopx_categoryModel::select(["id", "image", "name", "sort"])->where("isActive", 'Y')->get();

            $data = CustomerModel::where('isActive', 'Y')->get();

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

    public function findCustomer(Request $request, $id = null)
    {
        try {
            // Data
            $data = CustomerModel::where(["id" => $id, 'isActive' => 'Y'])
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
}
