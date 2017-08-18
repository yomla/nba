<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_teams', function (Blueprint $table) {
            $table->unsignedInteger('news_id');
            $table->unsignedInteger('team_id');
            $table->primary(['news_id', 'team_id']);
            
            $table->foreign('news_id')->references('id')->on('news')
            ->onDelete('cascade');
            $table->foreign('team_id')->references('id')->on('teams')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_teams');
    }
}
