<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('data_pemeriksaans', function (Blueprint $table) {
            $table->boolean('approval_status')->default(false); // Menyimpan status approval (true/false)
            $table->text('approval_note')->nullable(); // Catatan atau alasan terkait approval
        });
    }

    public function down()
    {
        Schema::table('data_pemeriksaans', function (Blueprint $table) {
            $table->dropColumn('approval_status');
            $table->dropColumn('approval_note');
        });
    }

};
