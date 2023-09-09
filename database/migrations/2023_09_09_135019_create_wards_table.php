<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWardsTable extends Migration
{
    public function up()
    {
        Schema::create('wards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subcounty_id');
            $table->string('ward_name');
            // Add any other columns you need for the "wards" table
            $table->timestamps();
        });

        // Add a foreign key constraint to link "wards" to "subcounties" if needed
        Schema::table('wards', function (Blueprint $table) {
            $table->foreign('subcounty_id')
                ->references('id')
                ->on('subcounties')
                ->onDelete('cascade'); // Adjust the onDelete behavior as needed
        });
    }

    public function down()
    {
        // Drop the "wards" table if the migration is rolled back
        Schema::dropIfExists('wards');
    }
}
