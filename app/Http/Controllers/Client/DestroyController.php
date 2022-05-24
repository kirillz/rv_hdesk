<?php

namespace App\Http\Controllers\Client;

use App\Models\Client;
use Illuminate\Routing\Controller;

class DestroyController extends BaseController
{
    public function __invoke(Client $client): \Illuminate\Http\RedirectResponse
    {
        $client->delete();
        return redirect()->route('client.index');
    }
}
