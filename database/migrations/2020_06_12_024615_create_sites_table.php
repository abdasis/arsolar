<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->longText('nama_situs')->nullable()->default('Nama Situs');
            $table->longText('tagline')->nullable()->default('Tagline Situs');
            $table->longText('logo')->nullable()->default('Logo situs');
            $table->longText('about_us')->nullable();
            $table->longText('alamat')->nullable()->default('text');
            $table->longText('telepon')->nullable()->default('text');
            $table->string('email', 100)->nullable()->default('text');
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
        Schema::dropIfExists('sites');
    }
}
