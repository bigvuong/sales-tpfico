<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectProjectCategoryPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_project_category', function (Blueprint $table) {
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id', 'project_id_fk_6821083')->references('id')->on('projects')->onDelete('cascade');
            $table->unsignedBigInteger('project_category_id');
            $table->foreign('project_category_id', 'project_category_id_fk_6821083')->references('id')->on('project_categories')->onDelete('cascade');
        });
    }
}
