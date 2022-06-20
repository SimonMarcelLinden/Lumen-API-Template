<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('options', function (Blueprint $table) {
			$table->uuid('id')->primary();
			$table->string('name');
			$table->string('data')->default('string');
			$table->enum('type', ['button', 'checkbox', 'color', 'date', 'datetime-local', 'email', 'file', 'hidden', 'image', 'month', 'number', 'password', 'radio', 'range', 'reset', 'search', 'submit', 'tel', 'text', 'time', 'url', 'week'])->default('text');
			$table->string('label');
			$table->string('value');
			$table->string('rules')->default('required');
			$table->string('message')->default('Field required');
            $table->uuid('setting_id');
			$table->timestamps();
			$table->softDeletes();
			$table->unique([
				'name',
			]);

			$table->foreign('setting_id')->references('id')->on('settings')->onDelete('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('options');
	}
};
