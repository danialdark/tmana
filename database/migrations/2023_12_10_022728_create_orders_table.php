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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained("users")->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("plan_id")->constrained("plans")->onUpdate("cascade")->onDelete("cascade");
            $table->text("username");
            $table->text("password")->nullable();
            $table->text("payment_code")->nullable();
            $table->text("shaparak_code")->nullable();
            $table->tinyInteger("status")->default(0)->comment("0 is not paid 1 is payed");
            $table->tinyInteger("done")->default(0)->comment("0 is done 1 is not done");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
