<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('client_id')->index();
            //$table->unsignedInteger('account_id')->index();


            $table->float('discount');
            $table->string('pers_order_number');
            $table->date('invoice_date')->nullable();
            $table->date('due_date')->nullable();
            $table->text('terms');
            $table->text('public_notes');
            $table->boolean('is_deleted')->default(false);
            $table->boolean('is_recurring')->default(false);
            //$table->unsignedInteger('frequency_id');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamp('last_sent_date')->nullable();
            $table->unsignedInteger('recurring_invoice_id')->index()->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->string('tax_name1');
            $table->decimal('tax_rate1', 13, 3);

            $table->decimal('amount', 13, 2);
            $table->decimal('balance', 13, 2);

            $table->foreign('client_id')->references('id')->on('client')->onDelete('cascade');
            //$table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
            //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            //$table->foreign('invoice_status_id')->references('id')->on('invoice_statuses');
            //$table->foreign('recurring_invoice_id')->references('id')->on('invoices')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
