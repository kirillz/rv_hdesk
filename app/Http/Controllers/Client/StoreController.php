<?php

namespace App\Http\Controllers\Client;
use Illuminate\Http\RedirectResponse;
use App\Models\Client;
use Illuminate\Routing\Controller;
use App\DataTables\ClientDataTable;

class StoreController extends Controller
{
    public function __invoke(): RedirectResponse
    {
        // TODO: Implement __invoke() method.
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
}
