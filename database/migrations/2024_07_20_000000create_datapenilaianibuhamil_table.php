<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapenilaianibuhamilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapenilaianibuhamil', function (Blueprint $table) {
            $table->id();
            $table->date('hpht');
            $table->integer('usia_kehamilan');
            $table->string('tempat_periksa');
            $table->integer('berat_badan');
            $table->integer('tinggi_badan');
            $table->integer('lila');
            $table->string('tekanan_darah');
            $table->integer('tfu');
            $table->string('periksa_letak');
            $table->integer('djj');
            $table->string('status_imunisasi');
            $table->text('konseling');
            $table->enum('ttd', ['Ya', 'Tidak']);
            $table->enum('ppia_hiv', ['+', '-']);
            $table->enum('ppia_sifilis', ['+', '-']);
            $table->enum('ppia_hepatitis_b', ['+', '-']);
            $table->text('tata_laksana_kasus');
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
        Schema::dropIfExists('datapenilaianibuhamil');
    }
}