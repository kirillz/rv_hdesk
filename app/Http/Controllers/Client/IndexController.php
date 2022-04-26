<?php

namespace App\Http\Controllers\Client;

use App\Models\Client;
use Illuminate\Routing\Controller;
use App\DataTables\ClientDataTable;

class IndexController extends Controller
{
    public function __invoke(ClientDataTable $dataTable)
    {
        // TODO: Implement __invoke() method.
        $clients = Client::all();
        return $dataTable->render('client.index', compact('clients'));
    }
}
