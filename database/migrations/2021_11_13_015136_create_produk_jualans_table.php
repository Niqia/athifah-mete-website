<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukJualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk_jualans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id');
            $table->foreignId('user_id');
            $table->string('nama_produk');
            $table->string('slug')->unique();
            $table->text('excerpt')->nullable();;
            $table->string('ukuran')->nullable();
            $table->string('harga');
            $table->text('deskripsi')->nullable();
            $table->timestamp('posted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk_jualans');
    }
}
