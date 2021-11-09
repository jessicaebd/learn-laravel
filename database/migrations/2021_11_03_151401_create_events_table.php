<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('division_id');
            $table->foreignId('user_id');
            $table->string('name');
            $table->string('slug')->unique(true);
            $table->integer('price')->nullable(true);
            $table->text('excerpt');
            $table->text('description');
            $table->timestamp('start_at')->nullable(true);
            $table->timestamp('end_at')->nullable(true);
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
        Schema::dropIfExists('events');
    }
}
