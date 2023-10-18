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
        Schema::create('device_info', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('job_card_number');
            $table->string('equipment_model');
            $table->string('serial_number');
            $table->string('dvd_cd_rom')->nullable();
            $table->string('memory_type')->nullable();
            $table->string('memory_size')->nullable();
            $table->string('hdd_type')->nullable();
            $table->string('hdd_size')->nullable();
            $table->string('printer_model')->nullable();
            $table->string('catridge_present')->nullable();
            $table->string('catridge_type')->nullable();
            $table->string('complainant_service_number');
            $table->string('complainant_rank');
            $table->string('complainant_name');
            $table->string('complaint');
            $table->string('complainant_unit');
            $table->string('complainant_contact');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('device_info');
    }
};
