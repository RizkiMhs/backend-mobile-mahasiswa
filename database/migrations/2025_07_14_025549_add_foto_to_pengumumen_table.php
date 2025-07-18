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
        Schema::table('pengumumen', function (Blueprint $table) {
            //
            // Tambahkan kolom 'foto' setelah kolom 'isi'
            $table->string('foto')->nullable()->after('isi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengumumen', function (Blueprint $table) {
            //
            // Untuk bisa rollback jika terjadi kesalahan
            $table->dropColumn('foto');
        });
    }
};
