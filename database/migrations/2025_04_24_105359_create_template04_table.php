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
        Schema::create('template04', function (Blueprint $table) {
            $table->id();

            // Passport Details
            $table->string('type')->nullable();
            $table->string('country_code')->nullable();
            $table->string('passport_number');
            $table->string('full_name');
            $table->string('nationality');
            $table->date('dob');
            $table->string('gender')->nullable();
            $table->string('birth_place')->nullable();
            $table->text('address')->nullable();
            $table->string('issued_at')->nullable();
            $table->date('issue_date')->nullable();
            $table->date('expiry_date')->nullable();
            $table->text('mrz')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('old_passport')->nullable();
            $table->string('signature1')->nullable();

            // Aadhaar / Identity Details
            $table->string('aadhaar_enroll_no')->nullable();
            $table->string('aadhaar_recipient')->nullable();
            $table->string('aadhaar_care_of')->nullable();
            $table->text('aadhaar_address')->nullable();
            $table->string('aadhaar_mobile')->nullable();
            $table->string('aadhaar_number')->nullable();
            $table->string('aadhaar_identity_label')->nullable();
            $table->string('aadhaar_full_name')->nullable();
            $table->date('aadhaar_dob')->nullable();
            $table->string('aadhaar_gender')->nullable();
            $table->string('signature2')->nullable();

            // Police Verification
            $table->string('pvr_no');
            $table->date('pvr_issue_date');
            $table->string('pvr_name');
            $table->text('pvr_address');
            $table->string('pvr_remarks')->nullable();
            $table->string('pvr_place');
            $table->date('pvr_report_date');
            $table->string('signature3')->nullable();

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template04');
    }
};
