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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_id');
            $table->integer('doctor_id');
            $table->string('meeting_id')->nullable();
            $table->timestamp('appointment_time');
            $table->string('appointment_type');
            $table->string('appointment_subject');
            $table->string('appointment_note')->nullable();
            $table->string('appointment_status');
            $table->text('appointment_link')->nullable();
            $table->string('appointment_password')->nullable();
            $table->string('appointment_price')->nullable();
            $table->string('appointment_paid_price');
            $table->string('user_ip');
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
        Schema::dropIfExists('appointments');
    }
};
