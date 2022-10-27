<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprenties', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('first_name', 30);
            $table->string('last_name', 30);
            $table->string('email', 90)->nullable(); 
            $table->unsignedBigInteger('promotion_id'); //serve as the key which u'll reference the id of promotions(foreign)
            $table->foreign('promotion_id')->references('id')->on('promotions');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apprenties');
    }
};
