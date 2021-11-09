<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLastvotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lastvotes', function (Blueprint $table) {
            $table->id();
            $table->string('current_rank');
            $table->string('previous_rank');
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->string('previous_count')->nullable();
            $table->string('current_count')->nullable();
            $table->boolean('NE')->default('0');
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
        Schema::dropIfExists('lastvotes');
    }
}
