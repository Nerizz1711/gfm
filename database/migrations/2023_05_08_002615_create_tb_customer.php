<?php



use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\Schema;



class CreateTbCustomer extends Migration

{

    /**

     * Run the migrations.

     *

     * @return void

     */

    public function up()

    {

        Schema::create('tb_customer', function (Blueprint $table) {

            $table->id();

            $table->string("firstname", 50)->nullable();

            $table->string("lastname", 50)->nullable();
            
            $table->string('email', 100)->nullable();

            $table->string("phone", 20)->nullable();

            $table->string("image", 100)->nullable();

            $table->string('password', 255)->nullable();

            $table->text("token_line")->nullable();

            $table->decimal('lat', 9, 6)->nullable();

            $table->decimal('long', 10, 6)->nullable();

            $table->enum('isActive', ['Y', 'N'])->nullable()->default('Y');

            $table->string("created_by", 50)->nullable();

            $table->string("updated_by", 50)->nullable();

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

        Schema::dropIfExists('tb_customer');
    }
}
