<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomVisibilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_visibilities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('visibility_id');
            $table->foreign('visibility_id')->references('id')->on('post_visibilities')->onDelete('cascade');
        
            $table->unsignedBigInteger('custom_viewer_id');
            $table->foreign('custom_viewer_id')->references('id')->on('users')->onDelete('cascade');
        
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
        Schema::dropIfExists('custom_visibility');
    }
}
