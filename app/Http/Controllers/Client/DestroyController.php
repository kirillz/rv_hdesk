<?php

namespace App\Http\Controllers\Client;
use App\Models\Client;
use Illuminate\Routing\Controller;
use App\DataTables\ClientDataTable;

class DestroyController extends Controller
{
    public function __invoke(Client $client): \Illuminate\Http\RedirectResponse
    {
        // TODO: Implement __invoke() method.
        $client->delete();
        return redirect()->route('client.index');
    }
}
