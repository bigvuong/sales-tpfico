<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectProjectLocationPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_project_location', function (Blueprint $table) {
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id', 'project_id_fk_6821084')->references('id')->on('projects')->onDelete('cascade');
            $table->unsignedBigInteger('project_location_id');
            $table->foreign('project_location_id', 'project_location_id_fk_6821084')->references('id')->on('project_locations')->onDelete('cascade');
        });
    }
}
