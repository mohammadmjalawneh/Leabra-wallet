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
            $table->bigIncrements('tran_id');
            $table->decimal('amount');
            $table->unsignedBigInteger('cat_id');
            $table->unsignedBigInteger('subcat_id');
            $table->unsignedBigInteger('user_id');
            $table->date('date_ing');
            $table->string('note', '600')->nullable();
            $table->timestamps();
            $table->foreign('cat_id')->references('cat_id')->on('bigcate_tables');
            $table->foreign('user_id')->references('user_id')->on('usertables');
            $table->foreign('subcat_id')->references('sub_id')->on('subcate_tables');
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
