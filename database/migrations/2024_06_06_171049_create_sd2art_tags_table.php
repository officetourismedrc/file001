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
        Schema::create('sd2art_tags', function (Blueprint $table) {
            $table->id();
             $table->foreignId('site_tag_id')
            ->nullable()
            ->constrained(table:'site_tags', indexName:'fk_sd2artTag')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->foreignId('sous_div2_art_id')
            ->nullable()
            ->constrained(table:'sous_div2_art', indexName:'fk_artsd2tag')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->index(['site_tag_id', 'sous_div2_art_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sd2art_tags');
    }
};
