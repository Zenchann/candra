<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaggedTable extends Migration {

	public function up() {
		Schema::create('tagging_tagged', function(Blueprint $table) {
			$table->increments('id');
			if(config('tagging.primary_keys_type') == 'string') {
				$table->string('taggable_id');
			} else {
				$table->integer('taggable_id')->unsigned();
			}
			$table->string('taggable_type');
			$table->string('tag_name');
			$table->string('tag_slug');
		});
	}

	public function down() {
		Schema::drop('tagging_tagged');
	}
}
