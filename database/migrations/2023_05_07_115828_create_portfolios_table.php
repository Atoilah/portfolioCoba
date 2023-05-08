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
        Schema::create('portfolios', function (Blueprint $table) {
             $table->id();
            $table->string('Nama');
            $table->string('Title');
            $table->string('TitleSpan');
            $table->string('NamaDes');
            $table->string('Foto');
            $table->string('ProjectDes');
            $table->string('AboutJudul');
            $table->string('AboutDes');
            $table->string('AboutSosial');
            $table->string('AboutSDes');
            $table->string('Ig')->nullable();
            $table->string('Wa')->nullable();
            $table->string('Github')->nullable();
            $table->string('Tele')->nullable();
            $table->string('Fb')->nullable();
            $table->string('Email');
            $table->string('Company');
            $table->string('CompanyEmail');
            $table->string('CompanyAlamat');
            $table->string('CompanyKota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
