<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->bigincrements('id');
            $table->string('user_img');
            $table->string(column:'username',length: 100)->nullable(value(false));
            $table->string(column:'firstname',length: 50)->nullable(false);
            $table->string(column:'lastname',length: 50)->nullable(value(true));
            $table->string(column:'phone_number',length: 20)->nullable();
            $table->string(column:'address',length: 125)->nullable();
            $table->string(column:'email',length: 125)->nullable(value(false));
            $table->string(column:'password',length: 125)->nullable(value(false));
            $table->boolean(column:'is_admin')->default(false);
            $table->unsignedBigInteger('gender_id')->nullable();
            $table->unsignedBigInteger('image_id')->nullable();
            $table->timestamps();


            // to connect foreiggn key to primary key
            $table->foreign('gender_id')
                ->references('id')
                ->on('genders');
//                ->onUpdate('CASCADE')//Cascade from sql language (law 3ml update le gender table f yban f user table)
//                ->onDelete('SET NULL'); //SET NULL from sql language


            $table->foreign('image_id')
                ->references('id')
                ->on('images');
//                ->onUpdate('CASCADE')
//                ->onDelete('SET NULL');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
