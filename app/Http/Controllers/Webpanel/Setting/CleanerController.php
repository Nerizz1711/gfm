<?php

namespace App\Http\Controllers\Webpanel\Setting;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Functions\FunctionControl;
use App\Http\Controllers\Webpanel\LogsController;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;


use App\Models\Backend\CleanerModel;
use App\Models\Backend\CustomerModel;
use App\Models\Backend\ShiftModel;
use App\Models\Backend\AttendanceRecordModel;


class CleanerController extends Controller
{
    protected $prefix = 'back-end';
    protected $segment = 'webpanel';
    protected $controller = 'cleaner';
    protected $folder = 'cleaner';
    protected $folder_controller = 'setting.cleaner';
    protected $pagename = 'Cleaner';


    // public function items($parameters)
    // {

    //     $isActive = Arr::get($parameters, 'status');
    //     $keyword = Arr::get($parameters, 'keyword');
    //     $paginate = Arr::get($parameters, 'total', 15);
    //     $query = CleanerModel::with('customer');
    //     if ($isActive) {
    //         $query = $query->where('isActive', $isActive);
    //     }
    //     if ($keyword) {
    //         $query = $query->where('firstname', 'LIKE', '%' . trim($keyword) . '%');
    //         $query = $query->orwhere('lastname', 'LIKE', '%' . trim($keyword) . '%');
    //     }
    //     $query = $query->orderBy('id', 'asc');
    //     $results = $query->paginate($paginate);

    //     return $results;
    // }
    public function items($parameters)
    {
        // ดึงค่าตัวแปรจาก parameters
        $isActive = Arr::get($parameters, 'status');
        $keyword = Arr::get($parameters, 'keyword');
        $paginate = Arr::get($parameters, 'total', 15);

        // เริ่มการสร้าง query
        $query = CleanerModel::with('customer');

        // ตรวจสอบและเพิ่มเงื่อนไขการค้นหาตาม isActive
        if ($isActive) {
            $query->where('isActive', $isActive);
        }

        // ตรวจสอบและเพิ่มเงื่อนไขการค้นหาตาม keyword
        if ($keyword) {
            $query->where(function ($q) use ($keyword) {
                $q->where('firstname', 'LIKE', '%' . trim($keyword) . '%')
                    ->orWhere(
                        'lastname',
                        'LIKE',
                        '%' . trim($keyword) . '%'
                    )
                    ->orWhereHas('customer', function ($q) use ($keyword) {
                        $q->where('comp_name', 'LIKE', '%' . trim($keyword) . '%');
                    })
                    ->orWhere('email', 'LIKE', '%' . trim($keyword) . '%')
                    ->orWhere('phone', 'LIKE', '%' . trim($keyword) . '%');
            });
        }


        // เรียงลำดับตาม id ในลำดับน้อยไปหามาก
        $query->orderBy('id', 'asc');

        // สร้าง pagination และคืนค่าผลลัพธ์
        $results = $query->paginate($paginate);

        return $results;
    }

    public function attendanceItems($parameters)
    {
        $start_date = Arr::get($parameters, 'start_date');
        $end_date = Arr::get($parameters, 'end_date');
        $cleaner_id = Arr::get($parameters, 'cleaner_id');
        $keyword = Arr::get($parameters, 'keyword');
        $paginate = Arr::get($parameters, 'total', 15);

        $query = AttendanceRecordModel::where('cleaner_id', $cleaner_id)
            ->with(['cleaner.customer'])
            ->orderBy('atten_date', 'desc');

        if ($keyword) {
            $query->where(function ($query) use ($keyword) {
                $query->whereHas('cleaner', function ($q) use ($keyword) {
                    $q->where('firstname', 'LIKE', '%' . trim($keyword) . '%')
                        ->orWhere('lastname', 'LIKE', '%' . trim($keyword) . '%');
                })
                    ->orWhereHas('cleaner.customer', function ($q) use ($keyword) {
                        $q->where('comp_name', 'LIKE', '%' . trim($keyword) . '%');
                    });
            });
        }

        if ($start_date && $end_date) {
            $query = $query->whereBetween('atten_date', [$start_date, $end_date]);
        }

        $results = $query->paginate($paginate);

        return $results;
    }

    public function index(Request $request)
    {
        $items = $this->items($request->all());
        $items->pages = new \stdClass();
        $items->pages->start = ($items->perPage() * $items->currentPage()) - $items->perPage();

        $navs = [
            '0' => ['url' => "$this->segment", 'name' => 'Dashboard', 'last' => 0],
            '1' => ['url' => "$this->segment/$this->folder", 'name' => "$this->pagename", 'last' => 0],
        ];

        return view("$this->prefix.pages.$this->folder_controller.index", [
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'pagename' => $this->pagename,
            'navs' => $navs,
            'items' => $items,
        ]);
    }

    public function atten(Request $request, $id)
    {
        $items = $this->attendanceItems(['cleaner_id' => $id]);
        $items->pages = new \stdClass();
        $items->pages->start = ($items->perPage() * $items->currentPage()) - $items->perPage();


        $navs = [
            '0' => ['url' => "$this->segment", 'name' => 'Dashboard', 'last' => 0],
            '1' => ['url' => "$this->segment/$this->folder", 'name' => "$this->pagename", 'last' => 0],
            '2' => ['url' => "$this->segment/$this->folder/attendance/$id", 'name' => "Attendance $this->pagename", 'last' => 1],
        ];

        return view("$this->prefix.pages.$this->folder_controller.atten", [
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'pagename' => $this->pagename,
            'navs' => $navs,
            'items' => $items,
        ]);
    }

    public function add(Request $request)
    {
        $navs = [
            '0' => ['url' => "$this->segment", 'name' => 'Dashboard', 'last' => 0],
            '1' => ['url' => "$this->segment/$this->folder", 'name' => "$this->pagename", 'last' => 0],
            '2' => ['url' => "$this->segment/$this->folder/add", 'name' => "Add $this->pagename", 'last' => 1],
        ];

        return view("$this->prefix.pages.$this->folder_controller.add", [
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'pagename' => $this->pagename,
            'navs' => $navs,
            'customer' => CustomerModel::where('isActive', 'Y')->get(),
        ]);
    }

    public function edit(Request $request, $id)
    {

        $navs = [
            '0' => ['url' => "$this->segment", 'name' => 'Dashboard', 'last' => 0],
            '1' => ['url' => "$this->segment/$this->folder", 'name' => "$this->pagename", 'last' => 0],
            '2' => ['url' => "$this->segment/$this->folder/edit/$id", 'name' => "Edit $this->pagename", 'last' => 1],
        ];

        $cleaner = CleanerModel::findOrFail($id); // ดึงข้อมูล cleaner ที่ต้องการแก้ไข
        $customers = CustomerModel::where('isActive', 'Y')->get(); // ดึงข้อมูล customer ทั้งหมด
        $shifts = ShiftModel::where('customer_id', $cleaner->customer_id)->get(); // ดึงข้อมูล shifts ของ customer ที่กำลังแก้ไข

        return view("$this->prefix.pages.$this->folder_controller.edit", [
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'navs' => $navs,
            'row' => CleanerModel::find($id),
            'customer' => $customers,
            'shifts' => $shifts, // ส่งข้อมูล shifts ไปที่ view
        ]);
    }

    public function destroy(Request $request)
    {
        $datas = CleanerModel::find(explode(',', $request->id));
        if (@$datas) {
            foreach ($datas as $data) {
                Storage::disk('public')->delete($data->image);
                $query = CleanerModel::destroy($data->id);
            }
        }
        if (@$query) {
            return response()->json(true);
        } else {
            return response()->json(false);
        }
    }



    // ==== Function Insert Update Delete Status Sort & Others ====
    public function insert(Request $request, $id = null)
    {
        return $this->store($request, $id = null);
    }

    public function update(Request $request, $id)
    {
        return $this->store($request, $id);
    }

    public function store($request, $id = null)
    {
        try {
            DB::beginTransaction();
            $check = $this->check_user($request, $id, $request->email, $request->phone);
            if (!empty($check)) {
                $message = 'Duplicate data found in the following fields: ' . implode(', ', $check);
                return response()->json([
                    'status' => 500,
                    'message' => $message,
                    'desc' => 'Please try again'
                ]);
            }
            if ($id == null) {
                $data = new CleanerModel();
                $data->created_at = date('Y-m-d H:i:s');
                $data->updated_at = date('Y-m-d H:i:s');
                // $data->password = bcrypt($request->password);
            } else {
                $data = CleanerModel::find($id);
                $data->updated_at = date('Y-m-d H:i:s');
                // if ($request->resetpassword == 'on') {
                //     $data->password = bcrypt($request->password);
                // }
            }
            // $data->role = $request->role;
            $data->isActive = $request->isActive;
            $data->firstname = $request->firstname;
            $data->lastname = $request->lastname;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->customer_id = $request->customer_id;
            $data->shift_id = $request->shift_id;
            $data->nickname = $request->nickname;
            $data->age = $request->age;
            $data->birthday = $request->birthday;


            // $data->idcard = $request->idcard;
            // $data->sex = $request->sex;
            // $data->birthday = date('Y-m-d', strtotime($request->birthday));

            // Image upload
            $file = $request->image;
            if ($file) {
                Storage::disk('public')->delete($data->image);
                $image = FunctionControl::upload_image2($file, 'cleaner');
                $data->image = $image['image'];
            }

            $crime = $request->crime_history;
            if ($crime) {
                Storage::disk('public')->delete($data->crime_history);
                $image = FunctionControl::upload_image2($crime, 'cleaner');
                $data->crime_history = $image['image'];
            }

            if ($data->save()) {
                DB::commit();
                $arr['status'] = 200;
                $arr['message'] = 'Successfully.';
                $arr['desc'] = '';
                // return view("$this->prefix.alert.success", ['url' => url("$this->segment/$this->folder")]);
            } else {
                $arr['status'] = 500;
                $arr['message'] = 'Something went wrongs.';
                $arr['desc'] = 'Please try again';
                // return view("$this->prefix.alert.error", ['url' => url("$this->segment/$this->folder")]);
            }

            return json_encode($arr);
        } catch (\Exception $e) {
            DB::rollback();
            $error_log = $e->getMessage();
            $error_line = $e->getLine();
            $type_log = 'backend';
            $error_url = url()->current();
            LogsController::logInsert($error_line, $error_url, $error_log, $type_log);

            return view("$this->prefix.alert.alert", [
                'url' => $error_url,
                'title' => 'ไม่สามารถทำรายการได้',
                'text' => 'กรุณาทำรายการใหม่อีกครั้ง !',
                'icon' => 'error',
            ]);
        }
    }
    public function check_user(Request $request, $id, $email, $phone)
    {


        $duplicates = [];
        // ตรวจสอบ email
        if ($id == null) {
            $check_email = CleanerModel::where('email', $email)->first();
        } else {
            $check_email = CleanerModel::where('email', $email)->where('id', '!=', $id)->first();
        }
        if ($check_email) {
            $duplicates[] = 'Email';
        }

        // ตรวจสอบ phone
        if ($id == null) {
            $check_phone = CleanerModel::where('phone', $phone)->first();
        } else {
            $check_phone = CleanerModel::where('phone', $phone)->where('id', '!=', $id)->first();
        }
        if ($check_phone) {
            $duplicates[] = 'Phone';
        }

        return $duplicates;
    }

    public function show(Request $request, $id)
    {
        $navs = [
            '0' => ['url' => "$this->segment", 'name' => 'Dashboard', 'last' => 0],
            '1' => ['url' => "$this->segment/$this->folder", 'name' => "$this->pagename", 'last' => 0],
            '2' => ['url' => "$this->segment/$this->folder/show/$id", 'name' => "Show $this->pagename", 'last' => 1],

        ];
        $attendance = AttendanceRecordModel::with(['cleaner.customer'])->findOrFail($id);

        // Decode JSON strings to arrays
        if ($attendance->image_before) {
            $attendance->image_before = json_decode($attendance->image_before, true);
        }

        if ($attendance->image_after) {
            $attendance->image_after = json_decode($attendance->image_after, true);
        }

        return view("$this->prefix.pages.$this->folder_controller.show", [
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'pagename' => $this->pagename,
            'navs' => $navs,
            'attendance' => $attendance,

        ]);
    }
}
