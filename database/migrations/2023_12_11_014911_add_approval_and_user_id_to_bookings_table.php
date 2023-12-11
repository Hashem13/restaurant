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
        Schema::table('bookings', function (Blueprint $table) {
            $table->tinyInteger('isApproved')->default(0); // 0: pending, 1: approved, 2: declined
            $table->unsignedBigInteger('created_by')->nullable(); // Reference to user ID
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('isApproved');
            $table->dropColumn('created_by');
        });
    }
};