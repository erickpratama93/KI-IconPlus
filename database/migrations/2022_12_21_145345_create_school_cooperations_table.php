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
            $table->id();
            $table->string('npsn'); 
            $table->string('school_name');
            $table->string('school_address');
            $table->string('accreditation');
            $table->string('headmaster_name');
            $table->string('phone_number');
            $table->string('website');
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
