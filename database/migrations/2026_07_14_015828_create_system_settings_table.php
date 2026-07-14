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
        Schema::create('system_settings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('orgination_name');
            $table->string('address');
            $table->string('pan_no');
            $table->string('phone_number');
            $table->string('telephone_number');
            $table->string('footer_description');
            $table->string('map_url');
            $table->string('email');
            $table->string('facebook_url');
            $table->string('tiktok_url');
            $table->string('instagram_url');        
            $table->softDeletes();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_settings');
    }
};
