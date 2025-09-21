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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->text('details');
            $table->string('address');
            $table->foreignId('wilaya_id')->constrained();
            $table->foreignId('commun_id')->constrained();
            $table->enum('condition', ['broken', 'worn', 'good', 'like-new', 'new']);
            $table->enum('avalibility', ['weekend', 'weekdays-evenings', 'daytimes-on-weekdays', 'flexible']);
            $table->json('image_paths');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
