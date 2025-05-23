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
        Schema::create('repayments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('loan_id');
            $table->decimal('balance', 64, 0);
            $table->decimal('payments', 64, 0);
            $table->decimal('principal', 64, 0);
            $table->string('payments_method');
<<<<<<< HEAD
            $table->string('reference_number')->nullable();
=======
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
            $table->foreign('loan_id')->references('id')->on('loans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repayments');
    }
};
