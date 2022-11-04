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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('first_name');
            $table->string('last_name');
            $table->bigInteger('doctor_title_id');
            $table->bigInteger('medicine_field_id');
            $table->string('telephone')->nullable();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('profile_picture')->nullable();
            $table->string('about')->nullable();
            $table->string('service')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('education')->nullable();
            $table->string('specialization')->default("");
            $table->boolean('is_editor')->default(false);
            $table->boolean('is_admin')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('doctors');
    }
};
