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
        Schema::create('student_fees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('receipt_no');
            $table->string('paid_date');
            $table->string('student_id')->cascadeOnDelete()->constrained();
            $table->string('pay_amount');
            $table->string('pre_balance');
            $table->string('remaining_balance');
            $table->string('remarks');
            $table->string('received_by');
            $table->string('status')->default(0)->nullable();
           $table->softDeletes();
        });
    }

    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_fees');
    }
};
