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
            $table->timestamps();
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')
            ->references('id')
            ->on('clients');
            $table->enum('category', [
                'ремонт компьютера', 
                'ремонт телефона', 
                'ремонт ноутбука', 
                'ремонт телевизора', 
                'ремонт комплектующих', 
                'покупка комплектующих']);
            $table->enum('status', [
                'Новый', 
                'Принят в обработку', 
                'Ожидает запчасти для ремонта', 
                'Завершен', 'Готов к выдаче', 
                'Отменен (отказ клиента)', 
                'Отменен (отсутствуют запчасти)']);
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
