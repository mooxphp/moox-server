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
        Schema::create('forge_projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('url');
            $table->integer('server_id');
            $table->integer('site_id');
            $table->tinyInteger('behind')->nullable();
            $table->timestamp('last_deployment')->nullable();
            $table->string('last_commit')->nullable();
            $table->string('commit_message')->nullable();
            $table->string('commit_author')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forge-projects');
    }
};
