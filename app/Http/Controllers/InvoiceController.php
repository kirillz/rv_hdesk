<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Invoice;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();
        $clients = Client::all();
        //dd($invoices->client);
        //$clients = Client::where('invoice_id', $invoices->id)->get();
        //dump($clients);
        return view('invoice.index', compact('invoices'));

    }

    public function create()
    {
        $invoice = Invoice::all();
        return view('invoice.create', compact('invoice'));
    }

    public function store(): RedirectResponse
    {
        $data = request()->validate([
            'invoice_number' => 'string',
            'invoice_date' => 'string',
            'due_date' => 'string',
            'terms' => 'string',
            'is_deleted' => 'integer',
            'is_recurring' => 'integer',
            'start_date' => 'integer',
            'end_date' => 'string',
            'tax_name1' => 'string',
            'tax_rate1' => 'string',
            'amount' => 'string',
            'balance' => 'string',
        ]);
        //dd($data);
        Invoice::create($data);
        return redirect()->route('invoice.index');
    }

    public function show(Invoice $invoice)
    {
        //dd($invoice->name);
        return view('invoice.show', compact('invoice'));
    }

    public function edit(Invoice $invoice)
    {
        // dd($invoice->name);
        return view('invoice.edit', compact('invoice'));
    }

    public function update(Invoice $invoice)
    {
        $data = request()->validate([
            'invoice_number' => 'string',
            'invoice_date' => 'string',
            'due_date' => 'string',
            'terms' => 'string',
            'is_deleted' => 'integer',
            'is_recurring' => 'integer',
            'start_date' => 'integer',
            'end_date' => 'string',
            'tax_name1' => 'string',
            'tax_rate1' => 'string',
            'amount' => 'string',
            'balance' => 'string',
        ]);
        //dd($data);
        $invoice->update($data);
        return redirect()->route('invoice.show', $invoice->id);
    }

    public function destroy(Invoice $invoice)
    {
        $invoice->delete();
        return redirect()->route('invoice.index');
    }
}
