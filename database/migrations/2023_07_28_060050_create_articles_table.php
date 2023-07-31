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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('store_id')->constrained('stores')->cascadeOnDelete();
            $table->string('thumbnail')->nullable();
            $table->string('description')->nullable();
            $table->foreignId('encoder_id')->nullable()->constrained('people')->nullOnDelete();
            $table->string('key')->unique()->nullable();
            $table->string('slug')->unique()->nullable();
            $table->boolean('is_publish')->default(false);
            $table->string('price')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropForeign('articles_store_id_foreign');
            $table->dropForeign('articles_encoder_id_foreign');
        });
        Schema::dropIfExists('articles');
    }
};
