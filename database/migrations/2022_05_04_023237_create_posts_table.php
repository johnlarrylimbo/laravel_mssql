<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create('posts', function (Blueprint $table) {
					$table->id();
					$table->string('title');
					$table->string('excerpt');
					$table->string('body');
					$table->timestamp('datetime_added');
					$table->timestamp('datetime_updated')->nullable();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
			Schema::dropIfExists('posts');
	}
};
