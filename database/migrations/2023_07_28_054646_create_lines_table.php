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
        Schema::create('lines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('owner_id')->nullable()->constrained('people')->nullOnDelete();
            $table->foreignId('store_id')->constrained('stores')->cascadeOnDelete();
            $table->foreignId('manager_id')->nullable()->constrained('people')->nullOnDelete();
            $table->boolean('enable')->default(true);
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
        Schema::table('lines', function (Blueprint $table) {
            $table->dropForeign('lines_owner_id_foreign');
            $table->dropForeign('lines_store_id_foreign');
            $table->dropForeign('lines_manager_id_foreign');
        });
        Schema::dropIfExists('lines');
    }
};
