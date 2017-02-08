<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequisitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisitions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->unsigned();
            $table->integer('branch_id')->unsigned();
            $table->string('subject');
            $table->string('description');
            $table->integer('status');
            $table->dateTime('recruitment_date');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->decimal('min_price', 24, 2);
            $table->decimal('max_price', 24, 2);
            $table->integer('rate_type');
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
        Schema::dropIfExists('requisitions');
    }
}
