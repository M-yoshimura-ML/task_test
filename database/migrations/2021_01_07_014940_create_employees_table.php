<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Subsystem\UserAccount\Contracts\UserStatus;

/**
 * Class CreateEmployeesTable.
 */
class CreateEmployeesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employees', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('company_id')->unsigned();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->dateTime('password_updated_at')->nullable();
			$table->string('last_name');
			$table->string('first_name');
			$table->string('last_name_kana')->nullable();
			$table->string('first_name_kana')->nullable();
			$table->date('birthday')->nullable();
			$table->string('gender');
			$table->string('department')->nullable();
			$table->string('phone_number')->nullable();
			$table->string('occupation')->nullable();
			$table->string('type_of_industry')->nullable();
			$table->string('type_of_work')->nullable();
			$table->date('joining_date')->nullable();
			$table->string('position')->nullable();
			$table->string('assignment_level')->nullable();
			$table->tinyInteger('request_status')->unsigned()->nullable();
			$table->tinyInteger('status_no')->unsigned();
			$table->softDeletes();
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
		Schema::drop('employees');
	}
}
