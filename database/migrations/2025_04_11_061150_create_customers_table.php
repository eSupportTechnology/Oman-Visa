<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();

            // Basic Info
            $table->string('name');
            $table->string('nationality');
            $table->date('dob')->nullable();           // ✅ Date of Birth

            // Passport & Work Permit
            $table->string('passport_number');
            $table->date('passport_expiry_date')->nullable();
            $table->integer('work_permit_duration')->nullable();
            $table->enum('work_permit_status', ['Approved', 'Pending', 'Rejected'])->default('Pending');
            $table->string('reference_no')->nullable();
            $table->string('visa_type')->nullable();   // ✅ Visa Type

            // Account
            $table->string('password');

            // Files (file1 - file9)
            for ($i = 1; $i <= 9; $i++) {
                $table->string("file{$i}")->nullable();
            }

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
}
