<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clinic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {



        Schema::create('doctor', function (Blueprint $table) {
            $table->increments('id');
            $table->string("first_name");
            $table->string("last_name");
            $table->string("username");
            $table->string("email");
            $table->integer("password");
            $table->timestamps();
        });

        Schema::create('clinic', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->string("address");
            $table->integer("tel");

            $table->timestamps();
        });
        Schema::create('patient', function (Blueprint $table) {
            $table->increments('id');
            $table->string("first_name");
            $table->string("last_name");
            $table->string("father_name");
            $table->integer("D_number");
            $table->unique("D_number");
            $table->timestamps();
        });


        Schema::create('question', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('patient_id');
            //$table->foreign('patient_id')->references('D_number')->on('patient');
            //$table->unique(['id', 'patient_id']);
            $table->string('text');
            $table->string("answer");
            $table->boolean('is_confirmed')->default(false);
            $table->timestamps();
        });



        Schema::create('article', function (Blueprint $table) {
            $table->increments('id');
            $table->string("title");
            $table->string('passage');
            $table->timestamps();
        });

        Schema::create('image', function (Blueprint $table) {
            $table->increments('id');
            $table->string("title");
            $table->string('caption');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('patient');
        Schema::drop('doctor');
        Schema::drop('article');
        Schema::drop('question');



    }
}
