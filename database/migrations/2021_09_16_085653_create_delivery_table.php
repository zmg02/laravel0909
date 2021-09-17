<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery', function (Blueprint $table) {
            $table->id();
            $table->string('name')->notNullValue()->default('')->common('物流名称');
            $table->tinyInteger('freight_calculation_formula')->notNullValue()->default(0)->common('费用计算公式：0公式计算,1固定价格');
            $table->tinyInteger('is_standard')->notNullValue()->default(0)->common('是否默认物流');
            $table->tinyInteger('status')->notNullValue()->default(1)->common('是否启用');
            $table->decimal('price',10,2)->notNullValue()->default('0.00')->common('价格');
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
        Schema::dropIfExists('delivery');
    }
}
