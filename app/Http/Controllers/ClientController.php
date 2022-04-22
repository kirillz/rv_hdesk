<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Invoice;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;

class ClientController extends Controller
{
    //
    public function index()
    {
        //$invoices = Invoice::find(1);
        $clients = Client::all();
        //dd($invoices->client);
        //$clients = Client::where('invoice_id', $invoices->id)->get();
        //dump($clients);
        return view('client.index', compact('clients'));

    }

    public function create()
    {
            $invoices = Invoices::all();
            return view('client.create', compact('invoices'));
    }

    public function store(): RedirectResponse
    {
        $data = request()->validate([
            'name' => 'string',
            'address1' => 'string',
            'address2' => 'string',
            'city' => 'string',
            'state' => 'string',
            'postal_code' => 'integer',
        ]);
        //dd($data);
        Client::create($data);
        return redirect()->route('client.index');
    }

    public function show(Client $client)
    {
        //dd($client->name);
        return view('client.show', compact('client'));
    }

    public function edit(Client $client)
    {
        // dd($client->name);
        return view('client.edit', compact('client'));
    }

    public function update(Client $client)
    {
        $data = request()->validate([
            'name' => 'string',
            'address1' => 'string',
            'address2' => 'string',
            'city' => 'string',
            'state' => 'string',
            'postal_code' => 'integer',
        ]);
        //dd($data);
        $client->update($data);
        return redirect()->route('client.show', $client->id);
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('client.index');
    }
}
