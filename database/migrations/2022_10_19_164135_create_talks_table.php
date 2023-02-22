<?php

use App\Models\Laracon;
use App\Models\Speaker;
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
        Schema::create('talks', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Laracon::class);

            $table->string('title');
            $table->foreignIdFor(Speaker::class);
            $table->longText('description')->nullable();

            $table->string('video_url')->nullable();
            $table->string('video_starts_at')->nullable();
            $table->string('video_ends_at')->nullable();

            $table->integer('length')->comment('Stored in seconds.');

            $table->string('reference_url')->nullable();

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
        Schema::dropIfExists('talks');
    }
};
