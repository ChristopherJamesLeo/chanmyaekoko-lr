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
        Schema::table('users', function (Blueprint $table) {
            $table->string("firstname")->after("name")->nullable();
            $table->string("job")->after("password")->nullable();
            $table->string("address")->after("job")->nullable();
            $table->string("image")->after("address")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table -> dropColumn("firstname");
            $table -> dropColumn("job");
            $table -> dropColumn("address");
            $table -> dropColumn("image");
        });
    }
};
