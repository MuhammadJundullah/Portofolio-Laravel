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
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('desc');
            $table->string('date');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('certificates');

        Schema::table('certificates', function (Blueprint $table) {
        $table->dropTimestamps();
        });
    }
};
