<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkPermitsTable extends Migration
{
    public function up()
    {
        Schema::create('work_permits', function (Blueprint $table) {
            $table->id();
            $table->string('reference_no')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->string('nationality');
            $table->string('passport_number', 20);
            $table->date('passport_issue_date');
            $table->date('passport_expiry_date');
            $table->string('work_permit_type', 50);
            $table->date('work_permit_validity_start');
            $table->date('work_permit_validity_end');
            $table->integer('number_of_entries');
            $table->date('validity_date');
            $table->date('expiry_date');
            $table->integer('residence_duration');
            $table->text('additional_visa_info')->nullable();
            $table->text('conditions')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('work_permits');
    }
}
