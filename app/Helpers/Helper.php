<?php

namespace App\Helpers;

use App\Models\Backend\AdminModel;
use App\Models\Backend\ShopModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class Helper
{
    protected $prefix = 'back-end';

    // ==== Menu Active ====
    public static function auth_menu()
    {
        return view('back-end.alert.alert', [
            'url' => 'webpanel',
            'title' => 'เกิดข้อผิดพลาด',
            'text' => 'คุณไม่ได้รับสิทธิ์ในการใช้เมนูนี้ ! ',
            'icon' => 'error',
        ]);
    }

    public static function menu_active($menu_id)
    {
        $member_id = Auth::guard('admin')->id();
        $member = \App\Models\Backend\AdminModel::find($member_id);
        $role = \App\Models\Backend\RoleModel::find($member->role);
        $list_role = \App\Models\Backend\Role_listModel::where(['role_id' => $role->id, 'menu_id' => $menu_id])->first();

        return $list_role;
    }

    public static function getRandomID($size, $table, $column_name)
    {
        $check_status = 0;
        while ($check_status == 0) {
            $random_id = Helper::randomCode($size);

            $data = \DB::table($table)->where("$column_name", "$random_id")->get();
            if ($data->count() == 0) {
                $check_status = 1;
            }
        }

        return $random_id;
    }

    public static function randomCode($length)
    {
        $possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghigklmnopqrstuvwxyz'; // ตัวอักษรที่ต้องการสุ่ม
        $str = '';
        while (strlen($str) < $length) {
            $str .= substr($possible, rand() % strlen($possible), 1);
        }

        return $str;
    }

    public static function convertThaiDate($date, $type = 'date')
    {
        $thai_months = [
            1 => 'ม.ค.',
            2 => 'ก.พ.',
            3 => 'มี.ค.',
            4 => 'เม.ย.',
            5 => 'พ.ค.',
            6 => 'มิ.ย.',
            7 => 'ก.ค.',
            8 => 'ส.ค.',
            9 => 'ก.ย.',
            10 => 'ต.ค.',
            11 => 'พ.ย.',
            12 => 'ธ.ค.',
        ];
        $date = Carbon::parse($date);
        $month = $thai_months[$date->month];
        $year = $date->year + 543;

        if ($type == 'datetime') {
            return $date->format("j $month $year H:i:s");
        }

        return $date->format("j $month $year");
    }

    public static function typeLogs($type)
    {
        $html = '';
        if ($type == 'Error') {
            $html .= '
            
            <span class="fw-semibold text-danger"><b><i class="fas fa-exclamation-circle"></i> Error</b></span>';
        }

        return $html;
    }

    public static function typeLogsSystem($type)
    {
        $html = '';
        if ($type == 'backend') {
            $html .= '
            <span class="fw-semibold text-info"><b>Backend</b></span>';
        } elseif ($type == 'frontend') {
            $html .= '
            <span class="fw-semibold text-primary"><b>Frontend</b></span>';
        }

        return $html;
    }

    // public static function isActive($status)
    // {
    //     $data = "";
    //     if ($status == 'Y') {
    //         $data = '<i style="font-size:20px;" class="fa fa-check-circle text-success"></i> ใช้งาน';
    //     } elseif ($status == 'N') {
    //         $data = '<i style="font-size:20px;" class="fa fa-times-circle text-danger"></i> ไม่ใช้งาน';
    //     }
    //     return $data;
    // }

    public static function isActive($status)
    {
        $data = '';
        if ($status == '1') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-success">Normal</span>';
        } elseif ($status == '2') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-warning">Suspended 15 days</span>';
        } elseif ($status == '3') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-warning">Suspended 30 days</span>';
        } elseif ($status == '4') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-danger">Permanently suspended</span>';
        }

        // if ($status == '1') {
        //     $data = '<span class="badge py-3 px-4 fs-7 badge-light-success">ปกติ</span>';
        // } elseif ($status == '2') {
        //     $data = '<span class="badge py-3 px-4 fs-7 badge-light-warning">ระงับการใช้งาน 15 วัน</span>';
        // } elseif ($status == '3') {
        //     $data = '<span class="badge py-3 px-4 fs-7 badge-light-warning">ระงับการใช้งาน 30 วัน</span>';
        // } elseif ($status == '4') {
        //     $data = '<span class="badge py-3 px-4 fs-7 badge-light-danger">ระงับการใช้งานถาวร</span>';
        // }
        return $data;
    }

    public static function isScore($score)
    {
        $data = '';
        if ($score == '1') {
            $data = '<span style="color:blue;">Excellent</span>';
        } elseif ($score == '2') {
            $data = '<span style="color:#50cd89;">Good</span>';
        } elseif ($score == '3') {
            $data = '<span style="color:black;">Fair</span>';
        } elseif ($score == '4') {
            $data = '<span style="color:orange;">Poor</span>';
        } elseif ($score == '5') {
            $data = '<span style="color:red;">Very Poor</span>';
        }

        return $data;
    }

    public static function Status($status)
    {
        $data = '';
        if ($status == 'Y') {
            $data = 'bg-success';
        } elseif ($status == 'N') {
            $data = 'bg-danger';
        }

        return $data;
    }

    public static function authMe($id)
    {
        $data = '';
        $item = AdminModel::find($id);
        if ($item) {
            $data = $item;
        }

        return $data;
    }

    public static function mainMenu()
    {
        $menus = \App\Models\Backend\MenuModel::whereIn('position', ['main', 'topic'])->where('status', 'on')->orderby('sort', 'asc')->get();

        return $menus;
    }

    public static function subMenu($menu_id)
    {
        $menus = \App\Models\Backend\MenuModel::where(['position' => 'secondary', '_id' => $menu_id])
            ->where('status', 'on')
            ->orderby('sort', 'asc')
            ->get();

        return $menus;
    }

    public static function showImage($image = null)
    {
        $html = "<style>.image-input-placeholder { background-image: url('backend/assets/media/svg/files/blank-image.svg'); } [data-theme='dark'] .image-input-placeholder { background-image: url('assets/media/svg/files/blank-image-dark.svg'); }</style>";
        if ($image != null) {
            $html = "<style>.image-input-placeholder { background-image: url('$image'); } [data-theme='dark'] .image-input-placeholder { background-image: url('$image'); }</style>";
        }

        return $html;
    }

    public static function new_status($status)
    {
        $data = '';
        if ($status == 'Y') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-success"><i style="font-size:20px;" class="fa fa-check-circle text-success"></i>&nbsp;Active</span>';
        } elseif ($status == 'N') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-danger"><i style="font-size:20px;" class="fa fa-times-circle text-danger"></i>&nbsp;Inactive</span>';
        } elseif ($status == 'P') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-warning"><i style="font-size:20px;" class="fa fa-newspaper text-warning"></i>&nbsp;Publisher</span>';
        } elseif ($status == 'D') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-warning"><i style="font-size:20px;" class="fa fa-newspaper text-warning"></i>&nbsp;Draft</span>';
        } elseif ($status == 'S') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-warning"><i style="font-size:20px;" class="fa fa-triangle-exclamation text-warning"></i>&nbsp;Suspended</span>';
        }

        return $data;
    }

    public static function buy_point_status($status)
    {
        $data = '';
        if ($status == 'S') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-primary"><i style="font-size:20px;" class="fa fa-check-circle text-primary"></i>&nbsp;Success</span>';
        }elseif ($status == 'Y') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-success"><i style="font-size:20px;" class="fa fa-check-circle text-success"></i>&nbsp;Approve</span>';
        } elseif ($status == 'N') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-danger"><i style="font-size:20px;" class="fa fa-times-circle text-danger"></i>&nbsp;Not Approve</span>';
        } elseif ($status == 'W') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-warning"><i style="font-size:20px;" class="fa fa-newspaper text-warning"></i>&nbsp;Waiting for approval</span>';
        }

        return $data;
    }

    public static function point_status($status)
    {
        $data = '';
        if ($status == 'transfer') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-primary"><i style="font-size:20px;" class="fa fa-exchange text-primary"></i>&nbsp;Transfer</span>';
        } elseif ($status == 'received_transfer') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-primary"><i style="font-size:20px;" class="fa fa-exchange text-primary"></i>&nbsp;Received transfer</span>';
        } elseif ($status == 'buy') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-success"><i style="font-size:20px;" class="fa fa-shopping-cart text-success"></i>&nbsp;Buy</span>';
        } elseif ($status == 'receive') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-success"><i style="font-size:20px;" class="fa fa-chevron-circle-down text-success"></i>&nbsp;Receive</span>';
        } 

        return $data;
    }

    public static function rand_sex($sex)
    {
        $data = '';

        if ($sex == 'M') {
            $data = '<i style="font-size:20px;" class="fa fa-male text-primary"></i><br />Men';
        } elseif ($sex == 'W') {
            $data = '<i style="font-size:20px;" class="fa fa-female text-danger"></i><br />Women';
        }

        return $data;
    }

    public static function order_status($order)
    {
        $data = '';

        if ($order == 'S') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-success">Order successful</span>';
        } elseif ($order == 'W') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-warning">Processing</span>';
        }

        return $data;
    }
    public static function order_payment_status($payment)
    {
        $data = '';
        if ($payment == 'success') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-success"><i style="font-size:20px;" class="fa fa-check-circle text-success"></i>&nbsp;Successful</span>';
        } elseif ($payment == 'cancle') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-danger"><i style="font-size:20px;" class="fa fa-times-circle text-danger"></i>&nbsp;Failed</span>';
        } elseif ($payment == 'waiting') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-warning"><i style="font-size:20px;" class="fa fa-clock text-warning"></i>&nbsp;Waiting</span>';
        } 

        return $data;
    }
    public static function order_status4($order_status)
    {
        $data = '';
        if ($order_status == 'S') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-success"><i style="font-size:20px;" class="fa fa-check-circle text-success"></i>&nbsp;Successful</span>';
        } elseif ($order_status == 'R') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-danger"><i style="font-size:20px;" class="fa fa-times-circle text-danger"></i>&nbsp;Failed</span>';
        } elseif ($order_status == 'W') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-warning"><i style="font-size:20px;" class="fa fa-clock text-warning"></i>&nbsp;Waiting</span>';
        } 

        return $data;
    }
    public static function payment_status($payment)
    {
        $data = '';
        if ($payment == 'success') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-success"><i style="font-size:20px;" class="fa fa-check-circle text-success"></i>&nbsp;Successful</span>';
        } elseif ($payment == 'cancle') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-danger"><i style="font-size:20px;" class="fa fa-times-circle text-danger"></i>&nbsp;Failed</span>';
        } elseif ($payment == 'processing') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-warning"><i style="font-size:20px;" class="fa fa-clock text-warning"></i>&nbsp;Processing</span>';
        } 

        return $data;
    }
    public static function order_status_2($order)
    {
        $data = '';
        if ($order == 'success') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-success"><i style="font-size:20px;" class="fa fa-check-circle text-success"></i>&nbsp;Successful</span>';
        } elseif ($order == 'cancle') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-danger"><i style="font-size:20px;" class="fa fa-times-circle text-danger"></i>&nbsp;Cancle</span>';
        }

        return $data;
    }

    public static function trans_status($trans)
    {
        $data = '';

        if ($trans == 'R') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-success">Recieved</span>';
        } elseif ($trans == 'T') {
            $data = '<span class="badge py-3 px-4 fs-7 badge-light-warning">Transporting</span>';
        }

        return $data;
    }

    public static function cuby($id)
    {
        $data = '';
        $item = AdminModel::find($id);
        if ($item) {
            $data = $item->email;
        }

        return $data;
    }

    public static function cubys($id)
    {
        $data = '';
        $item = ShopModel::find($id);
        if ($item) {
            $data = $item->email;
        }

        return $data;
    }

    public static function getImage($image, $size = null)
    {
        if ($size == null) {
            $size = "50";
        }
        $data = '';
        if ($image != null) {
            $data = '<div class="d-flex align-items-center">
                <div class=" symbol symbol-' . $size . 'px me-3">
                    <img src="' . $image . '" class="" alt="">
                </div>
            </div>';
        }
        return $data;
    }

    public static function circle_status($status)
    {
        $html = '';
        if ($status == 'D') {
            $html = '<div class="rounded-circle bg-warning w-15px h-15px" id="kt_ecommerce_add_category_status"></div>';
        } elseif ($status == 'Y') {
            $html = '<div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_category_status"></div>';
        } elseif ($status == 'N') {
            $html = '<div class="rounded-circle bg-danger w-15px h-15px" id="kt_ecommerce_add_category_status"></div>';
        }
        echo $html;
    }

    public static function buy_point_circle_status($status)
    {
        $html = '';
        if ($status == 'W') {
            $html = '<div class="rounded-circle bg-warning w-15px h-15px" id="kt_ecommerce_add_category_status"></div>';
        } elseif ($status == 'Y') {
            $html = '<div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_category_status"></div>';
        } elseif ($status == 'N') {
            $html = '<div class="rounded-circle bg-danger w-15px h-15px" id="kt_ecommerce_add_category_status"></div>';
        }elseif ($status == 'S') {
            $html = '<div class="rounded-circle bg-primary w-15px h-15px" id="kt_ecommerce_add_category_status"></div>';
        }
        echo $html;
    }

    // =====================
}
