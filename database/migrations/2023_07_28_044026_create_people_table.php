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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('gender', 1)->nullable();
            $table->date('birth_date')->nullable();
            $table->string('birth_place')->nullable();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('photo')->nullable();
            $table->string('nationality')->nullable();
            $table->foreignId('identity_type_id')->nullable()->constrained('identity_types')->nullOnDelete();
            $table->string('identity_number')->nullable();
            $table->foreignId('person_type_id')->constrained('person_types')->cascadeOnDelete();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->unique()->nullable();
            $table->foreignId('country_id')->nullable()->constrained('countries')->nullOnDelete();
            $table->foreignId('city_id')->nullable()->constrained('cities')->nullOnDelete();
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
        Schema::table('people', function (Blueprint $table) {
            $table->dropForeign('people_user_id_foreign');
            $table->dropForeign('people_identity_type_id_foreign');
            $table->dropForeign('people_person_type_id_foreign');
            $table->dropForeign('people_country_id_foreign');
            $table->dropForeign('people_city_id_foreign');
        });
        Schema::dropIfExists('people');
    }
};
