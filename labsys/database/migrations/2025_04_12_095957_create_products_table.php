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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_id', 10)->unique();
            $table->string('product_name');
            $table->date('mfg_date')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('category_id')->constrained('category')->cascadeOnDelete()->cascadeOnDelete();
            $table->enum('status',['Pending','Fail','Pass','Send to CPRI'])->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
