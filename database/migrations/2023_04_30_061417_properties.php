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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('city_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->integer('property_type_id');
            $table->string('name');
            $table->string('address');
            $table->string('latitude');
            $table->string('longitude');
            $table->json('amenity');
            $table->string('price_range')->nullable();
            $table->string('opening_hours')->nullable();
            $table->longText('description')->nullable();
            $table->text('slug')->nullable();
            $table->string('thumbnail')->nullable();
            $table->json('gallery')->nullable();
            $table->integer('rating');
            $table->boolean('pet_friendly')->default(false);
            $table->boolean('couple_friendly')->default(false);
            $table->boolean('top_rated')->default(false);
            $table->string('meta_keyword')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('mobile_meta_keyword')->nullable();
            $table->text('mobile_meta_description')->nullable();
            $table->string('mobile_meta_title')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
