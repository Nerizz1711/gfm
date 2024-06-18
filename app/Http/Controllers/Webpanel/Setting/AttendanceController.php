<?php

namespace App\Http\Controllers\Webpanel\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Arr;

use App\Models\Backend\CleanerModel;
use App\Models\Backend\CustomerModel;
use App\Models\Backend\AttendanceRecordModel;


class AttendanceController extends Controller
{
    protected $prefix = 'back-end';
    protected $segment = 'webpanel';
    protected $controller = 'attendance';
    protected $folder = 'attendance';
    protected $folder_controller = 'setting.attendance';
    protected $pagename = 'Attendance';


    public function items($parameters)
    {
        $isActive = Arr::get($parameters, 'status');
        $keyword = Arr::get($parameters, 'keyword');
        $paginate = Arr::get($parameters, 'total', 15);
        $query = AttendanceRecordModel::with(['cleaner.customer']);

        if ($isActive) {
            $query = $query->whereHas('cleaner', function ($q) use ($isActive) {
                $q->where('isActive', $isActive);
            });
        }

        if ($keyword) {
            $query = $query->whereHas('cleaner', function ($q) use ($keyword) {
                $q->where('firstname', 'LIKE', '%' . trim($keyword) . '%')
                    ->orWhere('lastname', 'LIKE', '%' . trim($keyword) . '%');
            });
        }

        $query = $query->orderBy('id', 'asc');
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

    public function show(Request $request, $id)
    {
        $navs = [
            '0' => ['url' => "$this->segment", 'name' => 'Dashboard', 'last' => 0],
            '1' => ['url' => "$this->segment/$this->folder", 'name' => "$this->pagename", 'last' => 0],
            '2' => ['url' => "$this->segment/$this->folder/show/$id", 'name' => "Show $this->pagename", 'last' => 1],

        ];
        $attendance = AttendanceRecordModel::with(['cleaner.customer'])->findOrFail($id);

        // $image_before = $attendance->image_before;
        // $image_after = $attendance->image_after;

        // $attendance->image_before = json_decode($image_before, true);
        // $attendance->image_after = json_decode($image_after, true);

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
