<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('provider_id')->unsigned();
            $table->integer('requisition_id')->unsigned();
            $table->string('subject');
            $table->string('description');
            $table->integer('status');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->integer('rate_type');
            $table->decimal('markup_price', 24, 2);
            $table->decimal('markup_rate_type', 24, 2);
            $table->dateTime('submitted_at');
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
        Schema::dropIfExists('tenders');
    }
}
