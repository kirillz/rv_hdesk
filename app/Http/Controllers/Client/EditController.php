<?php

namespace App\Http\Controllers\Client;

use App\Models\Client;
use Illuminate\Routing\Controller;

class EditController extends Controller
{
    public function __invoke(Client $client)
    {
        return view('client.edit', compact('client'));
    }
}
