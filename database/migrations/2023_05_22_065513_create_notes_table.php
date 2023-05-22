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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('team_id')->nullable();
            $table->string('title');
            $table->unsignedBigInteger('subject_id')->nullable();
            $table->longtext('contents');
            $table->longtext('formatted_contents')->nullable();
            $table->timestamp('generated_at')->nullable();
            $table->integer('times_studied')->nullable()->default(0);
            $table->timestamp('last_studied_at')->nullable();
            $table->float('price');
            $table->integer('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
