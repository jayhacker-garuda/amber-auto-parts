<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutoPartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auto_parts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('model_id');
            $table->unsignedBigInteger('category_id');
            $table->integer('price');
            $table->string('description');
            $table->string('condition');
            $table->unsignedBigInteger('fitment_model_id');
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
        Schema::dropIfExists('auto_parts');
    }
}