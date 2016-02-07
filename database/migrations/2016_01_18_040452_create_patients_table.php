<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_name', 100);
            $table->string('patient_id', 50)->unique();
            $table->string('father_name', 100);
            $table->string('consult_dr', 100);
            $table->string('address', 255);
            $table->string('phone_number', 30);
            $table->string('gender', 30);
            $table->string('age', 30);
            $table->date('admission_date', 30);
            $table->string('reffered_dr', 30);
            $table->string('digital_xray', 11);
            $table->string('ultrasonogram', 11);
            $table->string('ecg', 11);
            $table->string('digital_ecg', 11);
            $table->string('endoscopy', 11);
            $table->string('blood_grouping', 11);
            $table->string('blood_cs', 11);
            $table->string('blood_cbc', 11);
            $table->string('urine', 11);
            $table->string('hbs_normal', 11);
            $table->string('ct_scan', 11);
            $table->string('stool', 11);
            $table->string('commision', 11);
            $table->string('total', 11);
            $table->string('discount', 11);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('patients');
    }
}
