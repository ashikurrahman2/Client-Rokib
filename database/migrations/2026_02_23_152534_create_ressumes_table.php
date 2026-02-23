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
        Schema::create('ressumes', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('designation')->nullable();
            $table->text('currentdesignation')->nullable();
            $table->integer('total_exp')->nullable();
            $table->string('cover_letter')->nullable();
            $table->string('company_name')->nullable();
            $table->string('current_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ressumes');
    }
};
