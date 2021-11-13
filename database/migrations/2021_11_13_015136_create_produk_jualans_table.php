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
            
            $table->string('nama-produk');
            
            $table->text('excerpt');
            $table->string('harga');
            $table->string('ukuran')->nullabe();
            $table->text('deskripsi')->nullabe();
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
