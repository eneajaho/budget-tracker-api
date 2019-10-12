<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('type_id');
//            $table->foreign('type_id')->references('id')->on('types');

            $table->unsignedBigInteger('category_id');
//            $table->foreign('category_id')->references('id')->on('categories');

            $table->unsignedBigInteger('account_id');
//            $table->foreign('account_id')->references('id')->on('accounts');

            $table->integer('value');
            $table->string('currency');
            $table->text('notes');

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
        Schema::dropIfExists('transactions');
    }
}
