<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->integer('quantity');
            $table->double('unit_price');
            $table->string('customer_name');
            $table->string('address');
            $table->string('phone_number');            
            $table->timestamps();
            $table->softDeletes();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
