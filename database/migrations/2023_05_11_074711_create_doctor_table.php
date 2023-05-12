<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('doctor', function (Blueprint $table) {
            $table->id();

            $table->string("name");
            $table->string("gender");
            $table->string("faculty");
            $table->date("birth");
            $table->string("degree");
            $table->string("address");
            $table->string("image");
            $table->string("link_twitter")->nullable();
            $table->string("link_facebook")->nullable();
            $table->string("link_instagram")->nullable();
            $table->string("link_discord")->nullable();
            $table->string("description")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor');
    }
};
