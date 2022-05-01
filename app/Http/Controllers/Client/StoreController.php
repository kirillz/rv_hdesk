<?php

namespace App\Http\Controllers\Client;
use App\Http\Requests\Client\StoreRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\Client;
use Illuminate\Routing\Controller;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        //dd($data);
        Client::create($data);
        return redirect()->route('client.index');
    }
}
