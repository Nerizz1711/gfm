<?php

namespace App\Http\Controllers\Cleaner;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use App\Models\Backend\CleanerModel;
use App\Models\Backend\CustomerModel;
use App\Models\Backend\AttendanceRecordModel;




class LocationController extends Controller
{

    protected $prefix = 'cleaner-end';
    protected $segment = 'cleaner';
    protected $controller = 'location-check';
    protected $folder = 'location-check';

    public function index(Request $request)
    {
        $today = Carbon::today()->format('d/m/Y');
        $navs = [
            '0' => ['url' => "javascript:void(0)", 'name' => "location check", "last" => 0],
        ];
        return view("$this->prefix.pages.$this->folder.index", [
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'navs' => $navs,
            'today' => $today,
        ]);
    }

    // public function checkLocation(Request $request)
    // public function checkIn(Request $request)
    // {
    //     $latitude = $request->input('latitude');
    //     $longitude = $request->input('longitude');

    //     $cleanerId = Auth::guard('cleaner')->user()->id;
    //     $cleaner = CleanerModel::find($cleanerId);

    //     // พื้นที่ที่กำหนดไว้
    //     if ($cleaner && $cleaner->customer) {
    //         $designatedLatitude = $cleaner->customer->lat;
    //         $designatedLongitude = $cleaner->customer->long;

    //         // ตรวจสอบระยะห่าง
    //         $distance = $this->haversineGreatCircleDistance($latitude, $longitude, $designatedLatitude, $designatedLongitude);

    //         // ระยะห่างในกิโลเมตร
    //         $radius = 1; // กำหนดรัศมี 1 กม.

    //         if ($distance <= $radius) {

    //             $today = Carbon::today()->toDateString();
    //             $attendance = AttendanceRecordModel::firstOrCreate(
    //                 [
    //                     'cleaner_id' => $cleaner->id,
    //                     'atten_date' => $today,
    //                 ],
    //                 [
    //                     'check_in_time' => Carbon::now(),
    //                 ]
    //             );

    //             return response()->json(['status' => 'inside']);
    //         } else {
    //             return response()->json(['status' => 'outside']);
    //         }
    //     }
    // }

    public function checkIn(Request $request)
    {
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');

        $cleanerId = Auth::guard('cleaner')->user()->id;
        $cleaner = CleanerModel::find($cleanerId);

        if ($cleaner && $cleaner->customer) {
            // พื้นที่ที่กำหนดไว้
            $designatedLatitude = $cleaner->customer->lat;
            $designatedLongitude = $cleaner->customer->long;

            // ตรวจสอบระยะห่าง
            $distance = $this->haversineGreatCircleDistance($latitude, $longitude, $designatedLatitude, $designatedLongitude);

            // ระยะห่างในกิโลเมตร
            $radius = 1; // กำหนดรัศมี 1 กม.

            if ($distance <= $radius) {
                $today = Carbon::today()->toDateString();
                $attendance = AttendanceRecordModel::firstOrCreate(
                    [
                        'cleaner_id' => $cleaner->id,
                        'atten_date' => $today,
                    ],
                    [
                        'check_in_time' => Carbon::now(),
                        'customer_id' => $cleaner->customer->id,
                        'noti_status' => "unread",
                        'status_atten' => "checkIn",
                    ]
                );

                return response()->json(['status' => 'inside']);
            } else {
                return response()->json(['status' => 'outside']);
            }
        }

        return response()->json(['status' => 'error', 'message' => 'Cleaner or customer not found']);
    }


    public function checkOut(Request $request)
    {
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');

        $cleanerId = Auth::guard('cleaner')->user()->id;
        $cleaner = CleanerModel::find($cleanerId);

        // พื้นที่ที่กำหนดไว้
        if ($cleaner && $cleaner->customer) {
            $designatedLatitude = $cleaner->customer->lat;
            $designatedLongitude = $cleaner->customer->long;

            // ตรวจสอบระยะห่าง
            $distance = $this->haversineGreatCircleDistance($latitude, $longitude, $designatedLatitude, $designatedLongitude);

            // ระยะห่างในกิโลเมตร
            $radius = 1; // กำหนดรัศมี 1 กม.

            if ($distance <= $radius) {

                $today = Carbon::today()->toDateString();
                $attendance = AttendanceRecordModel::where('cleaner_id', $cleaner->id)
                    ->where('atten_date', $today)
                    ->first();

                if ($attendance) {
                    $attendance->update([
                        'check_out_time' => Carbon::now(),
                        'noti_status' => "unread",
                        'status_atten' => "checkOut",
                    ]);
                    return response()->json(['status' => 'inside']);
                }
                return response()->json(['status' => 'no-check-in']);
            } else {
                return response()->json(['status' => 'outside']);
            }
        }
    }

    private function haversineGreatCircleDistance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371)
    {
        $latFrom = deg2rad($latitudeFrom);
        $lonFrom = deg2rad($longitudeFrom);
        $latTo = deg2rad($latitudeTo);
        $lonTo = deg2rad($longitudeTo);

        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;

        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
            cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
        return $angle * $earthRadius;
    }

    public function uploadImagesBefore(Request $request)
    {
        $request->validate([
            'images_before.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $cleanerId = Auth::guard('cleaner')->user()->id;
        $today = Carbon::today()->toDateString();

        // ตรวจสอบว่ามีการเช็คอินแล้วและวันตรงกับวันปัจจุบัน
        $record = AttendanceRecordModel::where('cleaner_id', $cleanerId)
            ->where('atten_date', $today)
            ->whereNotNull('check_in_time')
            ->first();

        if (!$record) {
            return response()->json(['status' => 'error', 'message' => 'กรุณาเช็คอินก่อนทำการเพิ่มภาพ'], 400);
        }

        $imagePaths = [];
        if ($request->hasFile('images_before')) {
            foreach ($request->file('images_before') as $image) {
                $path = $image->store('images', 'public');
                $imagePaths[] = $path;
            }
            $record->image_before = json_encode($imagePaths); // Store as JSON array
            $record->noti_status = "unread";
            $record->status_atten = "uploadImgBefore";
            $record->save();
        }

        return response()->json(['status' => 'success', 'message' => 'อัพโหลดรูปก่อนทำงานสำเร็จ']);
    }

    public function uploadImagesAfter(Request $request)
    {
        $request->validate([
            'images_after.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $cleanerId = Auth::guard('cleaner')->user()->id;
        $today = Carbon::today()->toDateString();

        // ตรวจสอบว่ามีการเช็คอินแล้วและวันตรงกับวันปัจจุบัน
        $record = AttendanceRecordModel::where('cleaner_id', $cleanerId)
            ->where('atten_date', $today)
            ->whereNotNull('check_in_time')
            ->first();

        if (!$record) {
            return response()->json(['status' => 'error', 'message' => 'กรุณาเช็คอินก่อนทำการเพิ่มภาพ'], 400);
        }

        $imagePaths = [];
        if ($request->hasFile('images_after')) {
            foreach ($request->file('images_after') as $image) {
                $path = $image->store('images', 'public');
                $imagePaths[] = $path;
            }
            $record->image_after = json_encode($imagePaths); // Store as JSON array
            $record->noti_status = "unread";
            $record->status_atten = "uploadImgAfter";
            $record->save();
        }

        return response()->json(['status' => 'success', 'message' => 'อัพโหลดรูปหลังทำงานสำเร็จ']);
    }
}
