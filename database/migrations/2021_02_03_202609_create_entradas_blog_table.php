<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradasBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entradas_blog', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userName');
            $table->integer('userId');
            $table->string('title');
            $table->longText('message');
            $table->timestamp('dateOfCreation')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entradas_blog');
    }
}
