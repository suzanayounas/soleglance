<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->nullable()->constrained('users')->onDelete('set null')->onUpdate('set null');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('photo')->nullable();
            $table->string('gender');
            $table->string('dob');
            $table->string('martial_status');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->text('address');
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
        Schema::dropIfExists('user_informations');
    }
}
