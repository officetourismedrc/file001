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
        Schema::create('psd_art_conts', function (Blueprint $table) {
            $table->id();
            
              $table->foreignId('sous_div2_art_id')
            ->nullable()
            ->constrained(table:'sous_div2_art', indexName:'fk_psdartcont')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreignId('ont_a_catmeta_id')
            ->nullable()
            ->constrained(table:'ont_a_catmetas', indexName:'fk_psdmetacat')
            ->onDelete('set null')
            ->onUpdate('cascade');
            
            $table->foreignId('psd_art_cont_id')
            ->nullable()
            ->constrained(table:'psd_art_conts', indexName:'fk_psdartcont_self')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
            $table->string('content');
            $table->string('adress');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('psd_art_conts');
    }
};
