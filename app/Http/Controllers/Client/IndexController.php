<?php

namespace App\Http\Controllers\Client;

use App\Models\Client;
use Illuminate\Routing\Controller;
use App\DataTables\ClientDataTable;

class IndexController extends BaseController
{
    public function __invoke(ClientDataTable $dataTable)
    {
        $clients = Client::all();
        return $dataTable->render('client.index', compact('clients'));
    }
}
