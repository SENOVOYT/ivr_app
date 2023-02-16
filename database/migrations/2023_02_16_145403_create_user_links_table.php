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
        Schema::create('user_links', function (Blueprint $table) {
            $table->id();
            $table->string('custom_link_name');
            $table->integer('position');
            $table->integer('category')->unsigned();
            $table->integer('link')->unsigned();
            
            $table->foreign('category')->references('id')->on('user_categories')->onDelete('cascade');
            $table->foreign('link')->references('id')->on('permissions_links')->onDelete('cascade');
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
        Schema::dropIfExists('user_links');
    }
};
