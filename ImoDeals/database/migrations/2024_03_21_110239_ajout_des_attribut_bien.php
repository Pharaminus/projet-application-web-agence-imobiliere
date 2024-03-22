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
        Schema::table('biens', function (Blueprint $table) {
            //
            $table->string('code_bien');
            $table->string('GH');
            $table->string('immeuble');
            $table->integer('num_etage');
            $table->integer('num_titre');
            $table->integer('prix');
            $table->integer('superficie');
            $table->boolean('titre');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('biens', function (Blueprint $table) {
            //
        });
    }
};
