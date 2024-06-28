<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToTbCleanerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_cleaner', function (Blueprint $table) {
            $table->string('nickname')->after('lastname')->nullable();
            $table->date('birthday')->after('nickname')->nullable();
            $table->integer('age')->after('birthday')->nullable();
            $table->text('address')->after('age')->nullable();
            // $table->rememberToken()->after('phone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_cleaner', function (Blueprint $table) {
            $table->dropColumn('nickname');
            $table->dropColumn('birthday');
            $table->dropColumn('age');
            $table->dropColumn('address');
            // $table->dropColumn('remember_token');
        });
    }
}
