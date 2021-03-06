<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('dob');
            $table->string('address')->nullable();
            $table->string('admission_year')->nullable();
            $table->string('class')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('photo');
            $table->string('slug');
            $table->string('section')->nullable();
            $table->enum('gender', config('constants.GENDER'))->default('male');
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
        Schema::dropIfExists('students');
    }
}
