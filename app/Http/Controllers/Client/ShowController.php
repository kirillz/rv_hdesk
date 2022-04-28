<?php

namespace App\Http\Controllers\Client;
use App\Models\Client;
use Illuminate\Routing\Controller;
use App\DataTables\ClientDataTable;

class ShowController extends Controller
{
    public function __invoke(Client $client)
    {
        //dd($client->name);
        $clients = Client::all();
        return view('client.show', compact('clients'));
    }
}
