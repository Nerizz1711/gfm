<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNotiStatusToTbAttendanceRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_attendance_records', function (Blueprint $table) {
            $table->after('atten_date', function ($table) {
                $table->enum('noti_status',['unread','read'])->nullable()->default('unread');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_attendance_records', function (Blueprint $table) {
            $table->dropColumn('noti_status');
        });
    }
}
