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
            $table->string('siput', 100)->nullable();
            $table->longText('diskripsi')->nullable();
            $table->string('merek', 100)->nullable();
            $table->string('kategori', 100);
            $table->string('status_produk', 100);

            // for translate english
            $table->string('product', 100);
            $table->string('slug', 100)->nullable();
            $table->longText('discription')->nullable();
            $table->string('merk', 100)->nullable();
            $table->string('category', 100);
            $table->string('status', 100);

            $table->string('thumbnail', 255);
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
