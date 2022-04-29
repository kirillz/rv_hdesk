<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;

use App\Models\Client;


class ClientController extends Controller
{
    //
    public function index()
    {
        $clients = Client::all();
        //dump($clients);
        return view('client.index', compact('clients'));

    }
    public function create() {
        {
            return view('client.create');
        }
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

    public function show(Client $client) {
        //dd($client->name);
        return view('client.show', compact('client'));
    }

    public function edit(Client $client) {
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
