<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('fname',100);
            $table->string('lname',100);
            $table->string('phone',50);
            $table->string('Wanumber',50);
            $table->string('email',100);
            $table->string('fb_id');
            $table->string('status_visa',100);
            $table->string('pn',50)->nullable();
            $table->string('es',50)->nullable();
            $table->string('dob',50)->nullable();
            $table->string('city',100)->nullable();
            $table->string('state',100)->nullable();
            $table->string('vex',100)->nullable();
            $table->string('pex',100)->nullable();
            $table->string('thana',100)->nullable();
            $table->string('district',100)->nullable();
            $table->string('labour_job')->nullable();
            $table->string('executive_job')->nullable();
            $table->text('experience')->nullable();
            $table->string('refrence_uae_name')->nullable();
            $table->string('refrence_uae_number')->nullable();
            $table->string('refrence_bd_name')->nullable();
            $table->string('refrence_bd_number')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('customers');
    }
}
