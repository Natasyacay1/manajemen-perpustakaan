<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::create('loans', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->foreignId('book_id')->constrained()->onDelete('cascade');
        $table->date('tanggal_pinjam');
        $table->date('tanggal_jatuh_tempo');
        $table->date('tanggal_kembali')->nullable();
        $table->enum('status', ['dipinjam', 'dikembalikan', 'terlambat'])->default('dipinjam');
        $table->integer('denda')->default(0); // perpinjaman, misal rupiah

        $table->timestamps();
    });
}
    
    public function down()
    {
        Schema::dropIfExists('loans');
    }
};
