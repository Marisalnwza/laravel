<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFamily extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('student_id');
            $table->string('province')->comment('จังหวัด');
            $table->string('district')->comment('อำเภอ');
            $table->string('sub_district')->comment('ตำบล');
            $table->string('post_code')->comment('รหัสไปรษณีย์');
            $table->integer('total_person')->comment('จำนวนคนในครอบครัว');
            $table->enum('status_live', ['yes', 'no'])
                ->default('yes')->comment('สถานะการอยู่บ้าน');
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
        Schema::dropIfExists('family');
    }
}
