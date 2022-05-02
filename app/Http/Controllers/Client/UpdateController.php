<?php

namespace App\Http\Controllers\Client;
use App\Http\Requests\Client\StoreRequest;
use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;

class UpdateController extends BaseController
{
    public function __invoke(StoreRequest  $request, Client $client): RedirectResponse

    {
        $data = $request->validated();

        $this->service->update($client, $data);

        return redirect()->route('client.show', $client->id);
    }
}
