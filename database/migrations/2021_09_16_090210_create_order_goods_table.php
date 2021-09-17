<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_goods', function (Blueprint $table) {
            $table->id();
            $table->integer('goods_id')->notNullValue()->default(0)->common('商品编号');
            $table->string('goods_sku')->notNullValue()->default()->common('商品sku');
            $table->integer('order_id')->notNullValue()->default(0)->common('订单编号');
            $table->integer('number')->notNullValue()->default(0)->common('商品数量');
            $table->json('json')->common('商品json数据');
            $table->integer('create_time')->notNullValue()->default(0)->common('创建时间');
            $table->integer('update_time')->notNullValue()->default(0)->common('修改时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_goods');
    }
}
