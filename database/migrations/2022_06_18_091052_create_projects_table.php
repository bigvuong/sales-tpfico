<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('slug');
            $table->text('owner');
            $table->string('phone');
            $table->string('price')->nullable();
            $table->string('land_number')->nullable();
            $table->string('address')->nullable();
            $table->string('area')->nullable();
            $table->string('huong')->nullable();
            $table->string('road')->nullable();
            $table->longText('photo')->nullable();
            $table->longText('content')->nullable();
            $table->integer('juridical')->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
