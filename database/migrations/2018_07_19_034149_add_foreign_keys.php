<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$foreign_keys = DB::table('information_schema.table_constraints')
			->select('CONSTRAINT_NAME')
			->where('TABLE_SCHEMA', '=', env('DB_DATABASE'))
			->where('CONSTRAINT_TYPE', '=', 'FOREIGN_KEY')
			->get();
		
		$foreign_keys = $foreign_keys->pluck('CONTRAINT_NAME', 'CONSTRAINT_NAME');

		Schema::table('ingredient', function (Blueprint $table) {
			if(!isset($foreign_keys['ingredient_recipe_id_foreign'])) {
				$table->foreign('recipe_id')->references('id')->on('recipe');
			}

			if(!isset($foreign_keys['ingredient_uom_id_foreign'])) {
				$table->foreign('uom_id')->references('id')->on('unit_of_measure');
			}
		});

		Schema::table('recipe_category', function (Blueprint $table) {
			if(!isset($foreign_keys['recipe_category_recipe_id_foreign'])) {
				$table->foreign('recipe_id')->references('id')->on('recipe')->onDelete('cascade');
			}

			if(!isset($foreign_keys['recipe_category_category_id_foreign'])) {
				$table->foreign('category_id')->references('id')->on('category');
			}
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ingredient', function (Blueprint $table) {
			$table->dropForeign(['recipe_id']);
			$table->dropForeign(['uom_id']);
		});

		Schema::table('recipe_category', function (Blueprint $table) {
			$table->dropForeign(['recipe_id']);
			$table->dropForeign(['category_id']);
		});
	}
}
