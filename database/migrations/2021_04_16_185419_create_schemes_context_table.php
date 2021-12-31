<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchemesContextTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schemes_contexts', function (Blueprint $table) {
            $table->integer('scheme_id')->primary();
            $table->text('context');
            $table->integer('status');

           // $table->foreign('scheme_id')->references('scheme_id')->on('schemes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schemes_contexts');
    }
}
