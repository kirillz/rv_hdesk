<?php

namespace App\Http\Controllers\Client;

use App\Models\Client;
use Illuminate\Routing\Controller;
use App\DataTables\ClientDataTable;

class EditController extends Controller
{
    public function __invoke(Client $client)
    {
        // TODO: Implement __invoke() method.
        $clients = Client::all();
        return view('client.edit', compact('clients'));
    }
}
