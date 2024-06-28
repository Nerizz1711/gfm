<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusAttenToTbAttendanceRecordsTable extends Migration
{
    public function up()
    {
        Schema::table('tb_attendance_records', function (Blueprint $table) {
            $table->string('status_atten')->after('noti_status')->nullable();
        });
    }

    public function down()
    {
        Schema::table('tb_attendance_records', function (Blueprint $table) {
            $table->dropColumn('status_atten');
        });
    }
}
