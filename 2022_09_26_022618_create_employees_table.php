<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_name');
            $table->string('employee_address');
            $table->string('employee_phone');
            $table->string('employee_email');
            $table->integer('employee_salary');
            $table->timestamps();
            
        });
    }

    
};
