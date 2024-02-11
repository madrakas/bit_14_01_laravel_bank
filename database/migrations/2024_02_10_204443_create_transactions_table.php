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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char('time', 19);
            $table->unsignedBigInteger('fromAccountId')->default(0);
            $table->unsignedBigInteger('toAccountId')->default(0);
            $table->char('fromIBAN', 19);
            $table->char('toIBAN', 19);
            $table->char('fromName', 64);
            $table->char('toName', 64);
            $table->float('amount', 8, 2);
            $table->char('currency', 4);
        });
    }

    /**
     * Reverse the migrations.
     *
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
