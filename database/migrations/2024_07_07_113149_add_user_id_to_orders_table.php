<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::table('orders', function (Blueprint $table) {           
            Schema::table('orders', function (Blueprint $table) {
                $table->foreignIdFor(User::class);
            });
        });
    }

    
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};