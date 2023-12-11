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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId("category_id")->constrained("plan_categories")->onUpdate("cascade")->onDelete("cascade");
            $table->string("name");
            $table->decimal("price", 20, 2)->default(0);
            $table->decimal("dollar_price", 20, 2)->default(0);
            $table->string("duration_per_day")->default(0);
            $table->tinyInteger("status")->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
