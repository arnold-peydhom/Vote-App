<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Election;
use App\Models\Bulletin;
use App\Models\Participant;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vote', function (Blueprint $table) {
            $table->id();
            $table->date("date");
            $table->foreignIdFor(Election::class)->constrains()->onDeleteCascade();
            $table->foreignIdFor(Bulletin::class)->constrains()->onDeleteCascade();
            $table->foreignIdFor(Participant::class)->constrains()->onDeleteCascade();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vote');
    }
};
