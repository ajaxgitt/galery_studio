<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //

        Schema::create('imagenes', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('obra_id')->unsigned();
            $table->text('imagen_urls');
            $table->timestamps();
            $table->foreign('obra_id')->references('id')->on('obras')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
