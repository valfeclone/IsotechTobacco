<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('totalTagihan');
            $table->boolean('statusBayar');
            $table->string('idTransaksiOy')->nullable();
            $table->foreignId('user_id')->constrained('users')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->enum('statusTransaksi', ['belum dibayar', 'sedang diproses', 'dalam perjalanan', 'sudah selesai']);
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
        Schema::dropIfExists('orders');
    }
}
