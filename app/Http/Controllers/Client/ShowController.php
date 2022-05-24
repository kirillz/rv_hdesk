<?php

namespace App\Http\Controllers\Client;

use App\Models\Client;
use App\Models\Invoice;
use Illuminate\Routing\Controller;

class ShowController extends BaseController
{
    public function __invoke(Client $client)
    {
        //dd($invoice->name);
        return view('client.show', compact('client'));
    }
}
