<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. <create new table in database>
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // primary key <field name = 'id', type = int, auto_increment>
            $table->string('name'); // varchar(width: 255 by default)
            $table->string('email')->unique(); // chaining method
            $table->timestamp('email_verified_at')->nullable(); // timestamp or DATETIME (can be null)
            $table->string('password'); // for 'password' varchar(width: 60 by default)
            $table->rememberToken(); // 'remember_token'
            $table->timestamps(); // DATETIME 'created_at', 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
