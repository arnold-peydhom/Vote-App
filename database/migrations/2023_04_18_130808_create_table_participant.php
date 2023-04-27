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
        Schema::create('participant', function (Blueprint $table) {
            $table->increments("id");
            $table->string("nom", 100);
            $table->string("login", 30);
            $table->string("pwd", 100);
            $table->string("email", 70);
            $table->char("etat")->default(0);
            $table->string("tel", 16)->nullable();
            $table->integer("age");
            $table->char("sexe")->default("m");
            $table->string("status")->default("e");
            $table->unsignedInteger("id_region");
            $table->foreign("id_region")->references("id")->on("region")->onDelete("cascade");
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participant');
    }
};
