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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('owner_id')->constrained('people')->cascadeOnDelete();
            $table->string('thumbnail')->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('status')->default('active');
            $table->string('code')->unique()->nullable();
            $table->foreignId('store_type_id')->constrained('store_types')->cascadeOnDelete();
            $table->foreignId('parent_store_id')->nullable();
            $table->boolean('is_public')->default(true);
            $table->string('address')->nullable();
            $table->foreignId('country_id')->nullable()->constrained('countries')->nullOnDelete();
            $table->foreignId('city_id')->nullable()->constrained('cities')->nullOnDelete();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
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
        Schema::table('stores', function (Blueprint $table) {
            $table->dropForeign('stores_owner_id_foreign');
            $table->dropForeign('stores_store_type_id_foreign');
            $table->dropForeign('stores_parent_store_id_foreign');
            $table->dropForeign('stores_country_id_foreign');
            $table->dropForeign('stores_city_id_foreign');
        });
        Schema::dropIfExists('stores');
    }
};
