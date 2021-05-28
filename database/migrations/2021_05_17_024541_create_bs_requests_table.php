<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBsRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_requests', function (Blueprint $table) {
            $table->id();
            $table->string('complete_name');
            $table->string('email_address')->unique();
            $table->integer('contact_number');
            $table->date('birthdate');
            $table->string('religion');
            $table->date('bs_date');
            $table->time('bs_time');
            $table->string('bs_local');
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
        Schema::dropIfExists('bs_requests');
    }
}
