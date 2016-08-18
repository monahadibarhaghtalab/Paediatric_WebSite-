<?php
/**
 * Created by PhpStorm.
 * User: mona
 * Date: 8/18/2016 AD
 * Time: 13:10
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageTable extends Migration
{



    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {



        Schema::create('image', function (Blueprint $table) {
            $table->increments('image_id');
            $table->string("title");
            $table->string('caption');
            $table->string('image_gallery_addr');
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
        Schema::drop('image');

    }
}