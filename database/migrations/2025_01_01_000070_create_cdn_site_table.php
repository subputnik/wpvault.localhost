<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('cdn_site', function (Blueprint $table) {
            $table->id();
            $table->foreignId('site_id')->constrained()->cascadeOnDelete();
            $table->foreignId('cdn_id')->constrained()->cascadeOnDelete();
            $table->string('zone_identifier')->nullable();
            $table->timestamps();

            $table->unique(['site_id', 'cdn_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cdn_site');
    }
};