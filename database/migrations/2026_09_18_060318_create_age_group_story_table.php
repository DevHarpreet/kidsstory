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
        Schema::create('age_group_story', function (Blueprint $table) {
            $table->foreignUuid('story_id')->constrained('stories');
            $table->foreignUuid('age_group_id')->constrained('age_groups');
            $table->unique(['story_id', 'age_group_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('age_group_story');
    }
};
