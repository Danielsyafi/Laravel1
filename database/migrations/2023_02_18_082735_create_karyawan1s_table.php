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
        Schema::create('karyawan1s', function (Blueprint $table) {
            $table->id();
            $table->string('Nama',20);
            $table->char('umur');
            $table->string('Alamat',40);
            $table->biginteger('NO_Telp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawan1s');
    }
};
