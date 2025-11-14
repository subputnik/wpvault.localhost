<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('wp_admin_credentials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_panel_id')->constrained()->cascadeOnDelete();
            $table->string('username');          
            $table->text('password');             
            $table->string('role')->nullable();   
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('wp_admin_credentials');
    }
};