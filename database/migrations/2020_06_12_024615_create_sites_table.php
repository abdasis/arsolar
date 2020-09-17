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
            $table->string('nama_situs', 100)->nullable()->default('Nama Situs');
            $table->string('tagline', 250)->nullable()->default('Tagline Situs');
            $table->string('logo', 250)->nullable()->default('Logo situs');
            $table->longText('about_us')->nullable();
            $table->string('alamat', 250)->nullable()->default('text');
            $table->string('telepon', 250)->nullable()->default('text');
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
