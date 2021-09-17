<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name',55)->notNullValue()->default('')->common('姓名');
            $table->string('email')->notNullValue()->default('')->common('邮箱');
            $table->string('phone',11)->notNullValue()->default('')->common('手机号');
            $table->string('password',32)->notNullValue()->default('')->common('密码');
            $table->integer('login_count')->notNullValue()->default(0)->common('登录次数');
            $table->integer('last_login_time')->notNullValue()->default(0)->common('最后一次登录时间');
            $table->string('last_login_ip')->notNullValue()->default('')->common('最后一次登录ip');
            $table->tinyinteger('is_admin')->notNullValue()->default(0)->common('是否后台管理员：1.是 0.否');
            $table->tinyinteger('is_vip')->notNullValue()->default(0)->common('是否会员：1.是 0.否');
            $table->tinyinteger('is_verify')->notNullValue()->default(0)->common('是否验证：1.是 0.否');
            $table->integer('register_time')->notNullValue()->default(0)->common('注册时间');
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
        Schema::dropIfExists('user');
    }
}
