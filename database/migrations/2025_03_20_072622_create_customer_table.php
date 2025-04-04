<?php
/*
Migration File for Customers Table
*/

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('work_permit_status')->default('Approved');
            $table->string('name'); // Full name (Mandatory)
            $table->string('nationality'); // Nationality (Mandatory)
            $table->string('passport_number')->unique(); // Unique and used for login (Mandatory)
            $table->date('passport_expiry_date')->nullable(); // Optional
            $table->integer('work_permit_duration')->nullable()->default(3); // Optional, Default: 3 years
            $table->string('reference_no')->nullable(); // Optional
            $table->string('password'); // Encrypted password (Mandatory)
            $table->string('status')->default('active');

            // Optional File Uploads (Files 1 to 9)
            $table->string('file1')->nullable();
            $table->string('file2')->nullable();
            $table->string('file3')->nullable();
            $table->string('file4')->nullable();
            $table->string('file5')->nullable();
            $table->string('file6')->nullable();
            $table->string('file7')->nullable();
            $table->string('file8')->nullable();
            $table->string('file9')->nullable();
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
