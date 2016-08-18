<?php
/**
 * Created by PhpStorm.
 * User: mona
 * Date: 8/18/2016 AD
 * Time: 11:25
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTable extends Migration
{



    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question', function (Blueprint $table) {
            $table->increments('question_id');
            //$table->integer('patient_id');
            //$table->foreign('patient_id')->references('D_number')->on('patient');
            //$table->unique(['id', 'patient_id']);
            $table->string('name');//should be changed
            $table->email('email');//should be changed

            $table->string('text');
            $table->string("answer");
            $table->boolean('is_answered')->default(false);
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
        Schema::drop('question');

    }
}