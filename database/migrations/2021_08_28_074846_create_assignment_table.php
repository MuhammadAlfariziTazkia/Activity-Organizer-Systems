<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignment', function (Blueprint $table) {
            $table->id();
            $table->string("subject");
            $table->longText("description")->nullable();
            $table->mediumText("assignment_link")->nullable();
            $table->string("assignment_screenshot")->nullable();
            $table->string("finished_screenshot")->nullable();
            $table->string("assigned_date");
            $table->string("deadline_date");
            $table->string("user");
            $table->string("status");
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
        Schema::dropIfExists('assignment');
    }
}
