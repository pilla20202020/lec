<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('prior_prog_1')->nullable();
            $table->string('prior_prog_2')->nullable();
            $table->string('name')->nullable();
            $table->date('dob_n')->nullable();
            $table->string('gender')->nullable();
            $table->string('email')->nullable();
            $table->string('tel_no')->nullable();
            $table->string('mobile')->nullable();
            $table->string('zone')->nullable();
            $table->string('district')->nullable();
            $table->string('vdc')->nullable();
            $table->string('ward')->nullable();
            $table->string('tol')->nullable();
            $table->string('c_zone')->nullable();
            $table->string('c_district')->nullable();
            $table->string('c_vdc')->nullable();
            $table->string('c_ward')->nullable();
            $table->string('c_tol')->nullable();
            $table->string('f_name')->nullable();
            $table->string('f_occupation')->nullable();
            $table->string('m_name')->nullable();
            $table->string('m_occupation')->nullable();
            $table->string('p_email')->nullable();
            $table->string('p_tel')->nullable();
            $table->string('p_mob')->nullable();
            $table->string('guardian')->nullable();
            $table->string('r_guardian')->nullable();
            $table->string('g_tel')->nullable();
            $table->string('g_mobile')->nullable();
            $table->string('slc_board_uni')->nullable();
            $table->string('slc_year')->nullable();
            $table->string('slc_division')->nullable();
            $table->string('slc_score')->nullable();
            $table->string('slc_remarks')->nullable();
            $table->string('college_board_uni')->nullable();
            $table->string('college_year')->nullable();
            $table->string('college_division')->nullable();
            $table->string('college_score')->nullable();
            $table->string('college_remarks')->nullable();
            $table->string('ioe_roll')->nullable();
            $table->string('ioe_score')->nullable();
            $table->string('ioe_rank')->nullable();
            $table->boolean('is_featured')->default(0);
            $table->boolean('is_published')->default(0);
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
        Schema::dropIfExists('admissions');
    }
}
