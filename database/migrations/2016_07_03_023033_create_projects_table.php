<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('user_id');
            $table->string('project_title');
            $table->string('project_tag_line');
            $table->string('project_role');
            $table->string('project_promblem_1')->nullable();
            $table->string('project_promblem_2')->nullable();
            $table->string('project_promblem_3')->nullable();
            $table->string('project_promblem_4')->nullable();
            $table->string('project_promblem_5')->nullable();
            $table->string('project_promblem_6')->nullable();
            $table->string('project_promblem_7')->nullable();
            $table->string('project_solution_1')->nullable();
            $table->string('project_solution_2')->nullable();
            $table->string('project_solution_3')->nullable();
            $table->string('project_solution_4')->nullable();
            $table->string('project_solution_5')->nullable();
            $table->string('project_solution_6')->nullable();
            $table->string('project_solution_7')->nullable();
            $table->string('project_image');
            $table->string('project_description');
            $table->string('project_tool_planning_1')->nullable();
            $table->string('project_tool_planning_2')->nullable();
            $table->string('project_tool_planning_3')->nullable();
            $table->string('project_tool_planning_4')->nullable();
            $table->string('project_tool_planning_5')->nullable();
            $table->string('project_tool_planning_6')->nullable();
            $table->string('project_tool_planning_7')->nullable();
            $table->string('project_tool_frontend_1')->nullable();
            $table->string('project_tool_frontend_2')->nullable();
            $table->string('project_tool_frontend_3')->nullable();
            $table->string('project_tool_frontend_4')->nullable();
            $table->string('project_tool_frontend_5')->nullable();
            $table->string('project_tool_backend_1')->nullable();
            $table->string('project_tool_backend_2')->nullable();
            $table->string('project_tool_backend_3')->nullable();
            $table->string('project_tool_backend_4')->nullable();
            $table->string('project_tool_backend_5')->nullable();
            $table->string('project_feedback')->nullable();
            $table->string('project_gallery_1')->nullable();
            $table->string('project_gallery_2')->nullable();
            $table->string('project_gallery_3')->nullable();
            $table->string('project_gallery_4')->nullable();
            $table->string('project_gallery_5')->nullable();
            $table->string('project_gallery_6')->nullable();
            $table->string('project_gallery_7')->nullable();
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
        Schema::drop('projects');
    }
}
