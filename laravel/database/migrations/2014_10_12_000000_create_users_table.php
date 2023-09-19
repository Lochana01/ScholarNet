<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       // Schema::disableForeignKeyConstraints();

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('is_admin')->default(false);
            $table->string('user_type')->nullable();
            $table->string('batch_code')->nullable();
            $table->string('dob')->nullable();
            $table->string('address')->nullable();
            $table->string('telephone_no')->nullable();
            // $table->unsignedBigInteger('course_id')->nullable();
            // $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->boolean('account_status')->default(true);
            $table->rememberToken();
            $table->timestamps();
        });

        //Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
