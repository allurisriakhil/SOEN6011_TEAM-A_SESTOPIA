<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->longText('classification')->nullable();
            $table->longText('prerequisites')->nullable();
            $table->longText('related_software_engineering_area')->nullable();
            $table->longText('rationale')->nullable();
            $table->longText('roles')->nullable();
            $table->longText('related_work')->nullable();
            $table->longText('real_world_example')->nullable();
            $table->longText('role_of_academia')->nullable();
            $table->longText('tools')->nullable();
            $table->longText('self_assessment')->nullable();
            $table->longText('references')->nullable();
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
        Schema::dropIfExists('contents');
    }
}
