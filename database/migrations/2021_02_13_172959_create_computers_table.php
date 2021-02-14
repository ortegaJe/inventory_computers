<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->string('lote', 10)->nullable();
            $table->string('inv_code', 10)->nullable()->unique();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('serial')->unique();
            $table->string('serial_monitor')->nullable();
            $table->smallInteger('type_id');
            $table->smallInteger('ram_slot_0_id');
            $table->smallInteger('ram_slot_1_id');
            $table->smallInteger('hdd_id');
            $table->string('campus_id',3)->nullable();
            $table->string('cpu')->nullable();
            $table->ipAddress('ip')->unique();
            $table->macAddress('mac')->unique();
            $table->string('os')->nullable();
            $table->string('anydesk')->nullable();
            $table->string('pc_name')->nullable();
            $table->string('image')->nullable();
            $table->string('location')->nullable();
            $table->string('observation')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->smallInteger('deleted_at_status')->default(1)->nullable();
            $table->smallInteger('status_id')->default(1)->nullable();

            $table->foreign('campus_id')->references('id')->on('campus')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('computers');
    }
}
