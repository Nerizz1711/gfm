<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyTbCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_customer', function (Blueprint $table) {
            // Add new columns after 'id'
            $table->string('name')->nullable()->after('id');
            $table->string('comp_name')->nullable()->after('name');
            $table->string('address')->nullable()->after('comp_name');

            // Drop existing columns
            $table->dropColumn('firstname');
            $table->dropColumn('lastname');
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
            // Re-add the dropped columns in reverse order
            $table->string('firstname')->nullable()->after('id');
            $table->string('lastname')->nullable()->after('firstname');

            // Drop the newly added columns
            $table->dropColumn('name');
            $table->dropColumn('comp_name');
            $table->dropColumn('address');
        });
    }
}
