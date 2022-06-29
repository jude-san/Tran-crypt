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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->decimal('total')->nullable();
            $table->enum('status', ['ordered', 'paid', 'recieved', 'cancel'])->default('ordered');
            $table->bigInteger('apply_id')->unsigned();
            $table->timestamps();
            $table->foreign('apply_id')->references('id')->on('applies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};