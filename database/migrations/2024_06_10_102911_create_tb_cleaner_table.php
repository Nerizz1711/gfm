<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbCleanerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_cleaner', function (Blueprint $table) {
            $table->id();
            $table->integer("customer_id")->nullable();
            $table->string('line_id')->nullable()->unique();
            $table->string('avatar')->nullable();
            $table->string("firstname", 50)->nullable();
            $table->string("lastname", 50)->nullable();
            $table->string('name', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('phone', 50)->nullable();
            $table->string('remember_token', 100)->nullable();
            $table->enum('isActive', ['Y', 'N'])->nullable()->default('Y');
            $table->datetime('created_at')->nullable();
            $table->datetime('updated_at')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_cleaner');
    }
}
