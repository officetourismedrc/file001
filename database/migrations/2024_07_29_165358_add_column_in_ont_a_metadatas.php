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
        Schema::table('ont_a_metadatas', function (Blueprint $table) {
            //
            
            $table->string('content', length: 800)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ont_a_metadatas', function (Blueprint $table) {
            //
            
            $table->dropColumn('content');
        });
    }
};
