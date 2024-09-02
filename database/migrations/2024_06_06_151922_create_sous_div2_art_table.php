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
        Schema::create('sous_div2_art', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('deuxniveau_id')
            ->nullable()
            ->constrained(table:'deuxniveaus', indexName:'fk_sousdiv_art')
            ->onDelete('set null')
            ->onUpdate('cascade');
            
            $table->string('title')->default('no title');

            $table->string('iconPath')
            ->nullable()
            ->default('no_data');

            $table->foreignId('auser_id')
            ->nullable()
            ->constrained(table:'ausers', indexName:'fk_sousdivAct_au')
            ->onDelete('set null')
            ->onUpdate('cascade');
            
            $table->foreignId('articlecatg_id')
            ->nullable()
            ->constrained(table:'articlecatgs', indexName:'fk_artcat_sdart')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->string('adress');

            $table->string('qr_code')
            ->nullable()
            ->default('no_data');
            
           $table->unsignedTinyInteger('priority');
            
            

            $table->boolean('content_switcher')->default(1);
            
            $table->unsignedBigInteger('clicks');
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sous_div2_art');
    }
};
