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
        Schema::create('internships', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location'); 
            $table->string('position'); 
            $table->string('major');
            $table->string('asal_sekolah');
            $table->enum('jenis_kelamin', ['Laki Laki', 'Perempuan'])->default('Laki Laki');
            $table->enum('status', ['approved','pending', 'declined'])->default('pending');
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
        Schema::dropIfExists('internships');
    }
};