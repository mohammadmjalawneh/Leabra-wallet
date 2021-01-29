<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcateTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcate_tables', function (Blueprint $table) {
            $table->bigIncrements('sub_id');
            $table->unsignedBigInteger('cat_id');
            $table->unsignedBigInteger('user_id');
            $table->string('sub_name');
            $table->timestamps();
            $table->foreign('cat_id')->references('cat_id')->on('bigcate_tables');
            $table->foreign('user_id')->references('user_id')->on('usertables');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcate_tables');
    }
}
