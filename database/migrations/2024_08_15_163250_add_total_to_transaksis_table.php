<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTotalToTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('transaksis', function (Blueprint $table) {
        $table->decimal('total', 15, 2)->nullable(); // Tambahkan kolom total
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
{
    Schema::table('transaksis', function (Blueprint $table) {
        $table->dropColumn('total'); // Hapus kolom total saat rollback
    });
}
}
