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

use App\Models\Backend\CustomerModel;
use App\Models\Backend\ShiftModel;
use App\Models\Backend\AttendanceRecordModel;



class CustomerController extends Controller
{
    protected $prefix = 'back-end';
    protected $segment = 'webpanel';
    protected $controller = 'customer';
    protected $folder = 'customer';
    protected $folder_controller = 'setting.customer';
    protected $pagename = 'Customer';


    public function items($parameters)
    {

        $isActive = Arr::get($parameters, 'status');
        $keyword = Arr::get($parameters, 'keyword');
        $paginate = Arr::get($parameters, 'total', 15);
        $query = new CustomerModel();
        if ($isActive) {
            $query = $query->where('isActive', $isActive);
        }
        if ($keyword) {
            $query = $query->where('name', 'LIKE', '%' . trim($keyword) . '%');
            $query = $query->orwhere('comp_name', 'LIKE', '%' . trim($keyword) . '%');
            $query = $query->orWhere('email', 'LIKE', '%' . trim($keyword) . '%');
            $query = $query->orwhere('phone', 'LIKE', '%' . trim($keyword) . '%');
        }
        $query = $query->orderBy('id', 'asc');
        $results = $query->paginate($paginate);

        return $results;
    }

    public function attendanceItems($parameters)
    {
        $start_date = Arr::get($parameters, 'start_date');
        $end_date = Arr::get($parameters, 'end_date');
        $customer_id = Arr::get($parameters, 'customer_id');
        $keyword = Arr::get($parameters, 'keyword');
        $paginate = Arr::get($parameters, 'total', 15);

        $query = AttendanceRecordModel::whereHas('cleaner', function ($q) use ($customer_id) {
            $q->where('customer_id', $customer_id);
        })
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
        $items = $this->attendanceItems(['customer_id' => $id]);
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
        ]);
    }

    public function edit(Request $request, $id)
    {
        $navs = [
            '0' => ['url' => "$this->segment", 'name' => 'Dashboard', 'last' => 0],
            '1' => ['url' => "$this->segment/$this->folder", 'name' => "$this->pagename", 'last' => 0],
            '2' => ['url' => "$this->segment/$this->folder/edit/$id", 'name' => "Edit $this->pagename", 'last' => 1],
        ];

        return view("$this->prefix.pages.$this->folder_controller.edit", [
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'navs' => $navs,
            'row' => CustomerModel::find($id),
            'shifts' => ShiftModel::where('customer_id', $id)->get(),
        ]);
    }

    public function destroy(Request $request)
    {
        $datas = CustomerModel::find(explode(',', $request->id));
        if (@$datas) {
            foreach ($datas as $data) {
                Storage::disk('public')->delete($data->image);
                $query = CustomerModel::destroy($data->id);
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
                $data = new CustomerModel();
                $data->created_at = date('Y-m-d H:i:s');
                $data->updated_at = date('Y-m-d H:i:s');
                $data->password = bcrypt($request->password);
            } else {
                $data = CustomerModel::find($id);
                $data->updated_at = date('Y-m-d H:i:s');
                if ($request->resetpassword == 'on') {
                    $data->password = bcrypt($request->password);
                }
            }
            // $data->role = $request->role;
            $data->isActive = $request->isActive;
            $data->name = $request->name;
            $data->comp_name = $request->comp_name;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->lat = $request->lat;
            $data->long = $request->long;



            // Image upload
            $file = $request->image;
            if ($file) {
                Storage::disk('public')->delete($data->image);
                $image = FunctionControl::upload_image2($file, 'customer');
                $data->image = $image['image'];
            }



            // Save Shifts data


            if ($data->save()) {
                DB::commit();

                $shifts = [];
                if ($request->has('shift_name') && $request->has('start_time') && $request->has('end_time')) {
                    $shiftNames = $request->input('shift_name');
                    $startTimes = $request->input('start_time');
                    $endTimes = $request->input('end_time');

                    foreach ($shiftNames as $key => $name) {
                        // อัพเดตหรือสร้าง shift ใหม่ตาม customer_id และ name
                        $shift = ShiftModel::updateOrCreate(
                            [
                                'customer_id' => $data->id,
                                'name' => $name
                            ],
                            [
                                'start_time' => $startTimes[$key],
                                'end_time' => $endTimes[$key]
                            ]
                        );

                        $shifts[] = $shift; // เก็บ shifts สำหรับการตอบกลับหรือการประมวลผลเพิ่มเติม
                    }
                }


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
            $check_email = CustomerModel::where('email', $email)->first();
        } else {
            $check_email = CustomerModel::where('email', $email)->where('id', '!=', $id)->first();
        }
        if ($check_email) {
            $duplicates[] = 'Email';
        }

        // ตรวจสอบ phone
        if ($id == null) {
            $check_phone = CustomerModel::where('phone', $phone)->first();
        } else {
            $check_phone = CustomerModel::where('phone', $phone)->where('id', '!=', $id)->first();
        }
        if ($check_phone) {
            $duplicates[] = 'Phone';
        }

        return $duplicates;
    }

    public function getShiftsByCustomer(Request $request)
    {
        $customerId = $request->input('customer_id');
        $shifts = ShiftModel::where('customer_id', $customerId)->get();
        return response()->json($shifts);
    }

    public function getShifts($customer_id)
    {
        $shifts = DB::table('tb_shifts')->where('customer_id', $customer_id)->get();
        return response()->json(['shifts' => $shifts]);
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
