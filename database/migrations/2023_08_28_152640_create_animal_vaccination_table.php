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
        Schema::create('animal_vaccination', function (Blueprint $table) {
            $table->unsignedBigInteger("animal_id")->nullable();
            $table->foreign("animal_id")->references("id")->on("animals");

            $table->unsignedBigInteger("vaccination_id")->nullable();
            $table->foreign("vaccination_id")->references("id")->on("vaccinations");

            $table->date('vaccination_date')->default('0000-00-00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vaccination_animal');
    }
};
