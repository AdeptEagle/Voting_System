<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('candidate_id'); // Reference to the candidate
                $table->string('position'); // The position the vote is for (president, vice_president, etc.)
                $table->unsignedBigInteger('user_id')->nullable(); // Reference to the user (nullable if anonymous voting)
                $table->timestamps();
        
                // Adding foreign keys (you might need to create a 'candidates' and 'users' table)
                $table->foreign('candidate_id')->references('id')->on('candidates')->onDelete('cascade');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votes');
    }
};