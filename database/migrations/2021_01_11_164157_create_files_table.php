<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('path');
            $table->unsignedInteger('status_id');
            $table->foreign('status_id')->references('id')->on('file_statuses');
            $table->unsignedInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects');
            $table->string('steam_id');
            $table->smallInteger('call_attempts');
            $table->integer('leads_count');
            $table->date('expiration_date');
            $table->unsignedInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users');
            $table->dateTime('uploaded_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
