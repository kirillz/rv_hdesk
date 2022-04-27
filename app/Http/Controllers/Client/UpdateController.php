<?php

namespace App\Http\Controllers\Client;
use App\Models\Client;
use Illuminate\Routing\Controller;
use App\DataTables\ClientDataTable;

class UpdateController extends Controller
{
    public function __invoke(Client $client): \Illuminate\Http\RedirectResponse
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
        $client->update($data);
        return redirect()->route('client.show', $client->id);
    }
}
