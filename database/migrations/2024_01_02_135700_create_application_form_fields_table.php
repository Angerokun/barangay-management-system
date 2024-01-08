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
        Schema::create('application_form_fields', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('application_form_section_id');
            $table->unsignedBigInteger('field_id');
            $table->boolean('is_active');
            $table->timestamps();

            $table->foreign('field_id')->references('id')->on('fields');

            $table->foreign('application_form_section_id')->references('id')->on('application_form_sections');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_form_fields');
    }
};
