<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProviderRequisitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_requisitions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('requisition_id')->unsigned();
            $table->integer('provider_id')->unsigned();
            $table->integer('status');
            $table->dateTime('action_date');
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
        Schema::dropIfExists('provider_requisitions');
    }
}
