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
        Schema::create('forge_servers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('forge_id');
            $table->string('ip_address');
            $table->string('type')->nullable();
            $table->string('provider')->nullable();
            $table->string('region')->nullable();
            $table->string('ubuntu_ver')->nullable();
            $table->string('db_status')->nullable();
            $table->string('redis_status')->nullable();
            $table->string('php_version')->nullable();
            $table->boolean('is_ready');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forge-servers');
    }
};