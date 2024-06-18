<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRememberTokenToTbCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_customer', function (Blueprint $table) {
            // Add remember_token column after 'long' column
            $table->rememberToken()->after('long');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_customer', function (Blueprint $table) {
            $table->dropColumn('remember_token');
        });
    }
}
