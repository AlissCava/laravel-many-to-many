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
        Schema::create('project_technology', function (Blueprint $table) {
            $table->id();
            $table -> unsignedBigInteger ('project_id');
            $table -> unsignedBigInteger ('tecnology_id');
            $table->timestamps();

            $table -> foreign ('project_id') -> references('id') -> on('project') -> onDelete('cascade');
            $table -> foreign ('tecnology_id') -> references('id') -> on('tecnologies') -> onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_technology');
    }
};
