<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk', 100);
            $table->longText('diskripsi')->nullable();
            $table->string('merk', 100)->nullable();
            $table->string('nomor_produk', 100)->nullable();
            $table->string('tipe_produk', 100)->nullable();
            $table->string('max_power', 100)->nullable();
            $table->string('certificate', 100)->nullable();
            $table->string('payment', 100)->nullable();
            $table->string('warrant', 100)->nullable();
            $table->string('tag', 100);
            $table->string('category', 100);
            $table->string('status', 100);
            $table->string('thumbnail', 255);
            $table->string('create_by', 100);
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
        Schema::dropIfExists('products');
    }
}
