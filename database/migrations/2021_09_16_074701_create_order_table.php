<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->string('order_sn',55)->unique()->notNullValue()->default(0)->common('订单号');
            $table->decimal('price',10,2)->notNullValue()->default('0.00')->common('订单价格');
            $table->integer('uid')->notNullValue()->default(0)->common('用户编号');
            $table->string('address')->common('收货地址');
            $table->tinyinteger('status')->default(1)->common('订单状态：1.未付款，2.已付款，3.已发货，4.申请退货，5.退货成功');
            $table->integer('checkout_time')->notNullValue()->default(0)->common('支付时间');
            $table->integer('delivery_id')->notNullValue()->default(0)->common('货运编号');
            $table->decimal('delivery_price')->notNullValue()->default('0.00')->common('货运价格');
            $table->decimal('payment')->notNullValue()->default('0.00')->commont('实付款');
            $table->string('tracking_number')->common('运单号');
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
        Schema::dropIfExists('order');
    }
}
