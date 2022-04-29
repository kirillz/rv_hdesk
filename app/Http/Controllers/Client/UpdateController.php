<?php

namespace App\Http\Controllers\Client;
use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;

class UpdateController extends Controller
{
    public function __invoke(Client $client): RedirectResponse

    {
        $data = request()->validate([
            'name' => 'string',
            'email' => 'string',
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
