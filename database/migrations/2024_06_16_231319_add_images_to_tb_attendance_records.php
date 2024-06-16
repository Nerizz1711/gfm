<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImagesToTbAttendanceRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_attendance_records', function (Blueprint $table) {
            //
            $table->json('image_before')->nullable();
            $table->json('image_after')->nullable();
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
            //
            $table->dropColumn('image_before');
            $table->dropColumn('image_after');
        });
    }
}
