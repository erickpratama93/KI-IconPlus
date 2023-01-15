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
        Schema::create('school_cooperations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('npsn');
            $table->string('school_name');
            $table->string('school_address');
            $table->string('accreditation');
            $table->string('headmaster_name');
            $table->string('phone_number');
            $table->string('website');
            // $table->unsignedBigInteger('user_id');
            // $table->unsignedBigInteger('intern_id');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('intern_id')->references('id')->on('internships')->onDelete('cascade');
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
        Schema::dropIfExists('school_cooperations');
    }
};
