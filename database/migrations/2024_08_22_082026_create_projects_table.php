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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug');
            $table->string('category');
            $table->string('url')->nullable();
            $table->string('site')->nullable();
            $table->text('desc')->nullable();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('projects');

        Schema::table('projects', function (Blueprint $table) {
            $table->dropTimestamps();
        });
    }
};
