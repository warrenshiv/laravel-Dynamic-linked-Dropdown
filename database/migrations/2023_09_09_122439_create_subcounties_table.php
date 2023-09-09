<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcountiesTable extends Migration
{
    public function up()
    {
        Schema::create('subcounties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('county_id');
            $table->timestamps();

            // Define a foreign key constraint
            $table->foreign('county_id')->references('id')->on('counties')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('subcounties');
    }
}
