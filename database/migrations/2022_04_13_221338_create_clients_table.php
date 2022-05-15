<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('clients');
        Schema::dropIfExists('invoices');
        Schema::dropIfExists('tasks');
        Schema::dropIfExists('payments');

        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('invoice_id')->nullable();
            $table->unsignedBigInteger('task_id')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code')->nullable();

            $table->timestamps();
            $table->softDeletes();


            $table->index('invoice_id', 'client_invoice_idx');
            $table->index('task_id', 'client_task_idx');

            $table->foreign('invoice_id','client_invoice_fk')->on('invoices')->references('id')->onDelete('cascade');
            $table->foreign('task_id','client_task_fk')->on('tasks')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('clients');
    }
}
