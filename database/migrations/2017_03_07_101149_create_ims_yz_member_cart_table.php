<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImsYzMemberCartTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if (!Schema::hasTable('yz_member_cart')) {
            Schema::create('yz_member_cart', function (Blueprint $table) {
                $table->integer('id', true);
                $table->integer('member_id');
                $table->integer('uniacid');
                $table->integer('goods_id');
                $table->integer('total');
                $table->integer('price');
                $table->integer('option_id');
                $table->integer('created_at');
                $table->integer('updated_at');
                $table->integer('deleted_at')->nullable();
            });
        }
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('yz_member_cart');
	}

}
