<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->comment('shops table');
            $table->id();
            $table->string('shop_name')->nullable()->comment('shop name');
            $table->string('shop_number',30)->nullable();
            $table->string('shop_address')->nullable();
            $table->string('shop_phone',30)->nullable(); 
            $table->string('shop_email')->nullable();
            $table->string('shop_TIN',20)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
