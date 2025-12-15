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
        Schema::table('standings', function (Blueprint $table) {
            $table->foreignId('match_id')->nullable()->constrained('matches')->onDelete('cascade');
        });
    }

    //* Reverse the migration 
    
    public function down(): void
    {
        Schema::table('standings', function (Blueprint $table) {
            $table->dropForeign(['match_id']);
            $table->dropColumn('match_id');
        });
    }
};
