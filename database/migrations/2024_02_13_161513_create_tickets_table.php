<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('receipt_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('airlines_name')->nullable();
            $table->string('route')->nullable();
            $table->string('pay_by')->nullable();
            $table->dateTime('flight_date')->nullable();
            $table->float('gross_fare')->nullable();
            $table->float('deposit')->nullable();
            $table->string('net_fare')->nullable();
            $table->enum('status',['pending','check_out'])->default('pending');
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
        Schema::dropIfExists('tickets');
    }
};
