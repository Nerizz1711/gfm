<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTbMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_menu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('_id')->nullable();
            $table->string('name',100)->nullable();
            $table->text('url')->nullable();
            $table->text('icon')->nullable();
            $table->enum('position',['main','secondary','topic'])->nullable();


            $table->integer('sort')->nullable();
            $table->enum('status',['on','off'])->nullable()->default('on');
            $table->enum('delete_status',['on','off'])->nullable()->default('off');
            $table->datetime('created_at')->nullable();
            $table->datetime('updated_at')->nullable();
            $table->datetime('deleted_at')->nullable();
        });

        DB::table('tb_menu')->insert([
            [ "id" => "1", "_id"=>null, "name"=>"Template Form", "url"=>"templateform", "icon"=>"settings", "position"=>"main", "sort"=>"1", "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s') ],
            [ "id" => "2", "_id"=>"1", "name"=>"Standard", "url"=>"templateform/standard", "icon"=>"", "position"=>"secondary", "sort"=>"1", "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s') ],
            [ "id" => "3", "_id"=>"1", "name"=>"Modal", "url"=>"templateform/modal", "icon"=>"", "position"=>"secondary", "sort"=>"2", "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s') ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_menu');
    }
}
