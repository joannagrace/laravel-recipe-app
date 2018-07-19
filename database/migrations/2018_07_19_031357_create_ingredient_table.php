<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ingredient', function (Blueprint $table) {
			$table->increments('id');
			$table->decimal('amount', 11, 2);
			$table->string('description', 255);
			$table->integer('recipe_id')->unsigned();
			$table->integer('uom_id')->unsigned();
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
		Schema::dropIfExists('ingredient');
	}
}
