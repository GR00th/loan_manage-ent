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
        Schema::table('borrowers', function (Blueprint $table) {
            // Add indexes to frequently queried columns
            $table->index('identification');
            $table->index('mobile');
            $table->index('email');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('borrowers', function (Blueprint $table) {
            // Remove indexes
            $table->dropIndex(['identification']);
            $table->dropIndex(['mobile']);
            $table->dropIndex(['email']);
            $table->dropIndex(['created_at']);
        });
    }
}; 