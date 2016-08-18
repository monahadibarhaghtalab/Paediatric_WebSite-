<?php
/**
 * Created by PhpStorm.
 * User: mona
 * Date: 8/18/2016 AD
 * Time: 11:27
 */


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{



    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('article', function (Blueprint $table) {
            $table->increments('article_id');
            $table->string("image_article_addr");
            $table->string("title");
            $table->string('body');
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
        Schema::drop('article');

    }
}