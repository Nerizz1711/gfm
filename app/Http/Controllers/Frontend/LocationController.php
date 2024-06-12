<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class LocationController extends Controller
{

    protected $prefix = 'front-end';
    protected $segment = 'webpanel';
    protected $controller = 'location-check';
    protected $folder = 'location-check';

    public function index(Request $request)
    {
        $navs = [
            '0' => ['url' => "javascript:void(0)", 'name' => "location check", "last" => 0],
        ];
        return view("$this->prefix.pages.$this->folder.index", [
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'navs' => $navs,
        ]);
    }

    public function checkLocation(Request $request)
    {
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');

        // พื้นที่ที่กำหนดไว้
        $designatedLatitude = 13.791979203556718; // ตัวอย่าง: พิกัดของกรุงเทพมหานคร
        $designatedLongitude = 100.50491487020221;
        
        // ตรวจสอบระยะห่าง
        $distance = $this->haversineGreatCircleDistance($latitude, $longitude, $designatedLatitude, $designatedLongitude);

        // ระยะห่างในกิโลเมตร
        $radius = 1; // กำหนดรัศมี 1 กม.

        if ($distance <= $radius) {
            return response()->json(['status' => 'inside']);
        } else {
            return response()->json(['status' => 'outside']);
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
}
