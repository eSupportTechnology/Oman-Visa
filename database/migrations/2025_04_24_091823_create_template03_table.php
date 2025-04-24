<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('template03', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('passport_number');
            $table->date('application_date');
            $table->string('seri_no');
            $table->string('sam_no');
            $table->string('ozel_no');
            $table->string('reference_number');
            $table->string('signature')->nullable(); // ✅ Signature upload path
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template03');
    }
};
