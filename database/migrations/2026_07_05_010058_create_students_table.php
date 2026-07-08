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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('full_name');
            $table->string('course_id')->cascadeOnDelete()->constrained();
            $table->string('contact_number');
            $table->string('guardian_name');
            $table->string('guardian_number');
            $table->string('email');
            $table->string('date_of_birth');
            $table->string('gender');
            $table->string('address');
            $table->string('reffered_by');
            $table->string('qualification');
            $table->string('year');
            $table->string('school_name');
            $table->string('gpa');
            $table->string('status')->nullable()->default(0);
            $table->string('password')->nullable();
            $table->string('enquiry');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
