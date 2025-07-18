<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('journals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->text('content');
            $table->string('mood')->nullable();
            $table->json('tags')->nullable();
            $table->boolean('is_public')->default(false);
            $table->boolean('show_name')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('journals');
    }
}; 