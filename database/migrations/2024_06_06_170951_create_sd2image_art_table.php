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
        Schema::create('sd2image_art', function (Blueprint $table) {
            $table->id();
            
             $table->foreignId('ont_actu_img_id')
            ->nullable()
            ->constrained(table:'ont_actu_imgs', indexName:'fk_ontImgsd2')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->foreignId('sous_div2_art_id')
            ->nullable()
            ->constrained(table:'sous_div2_art', indexName:'fk_artsd2')
            ->onDelete('set null')
            ->onUpdate('cascade');
            
             $table->foreignId('ontartimg_cat_id')
            ->nullable()
            ->constrained(table:'ontartimg_cats', indexName:'fk_ontImgCatsd2')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->index(['ont_actu_img_id', 'sous_div2_art_id']);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sd2image_art');
    }
};
