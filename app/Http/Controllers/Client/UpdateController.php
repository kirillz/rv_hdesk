<?php

namespace App\Http\Controllers\Client;

use App\Http\Requests\Client\UpdateRequest;
use App\Models\Client;
use Illuminate\Http\RedirectResponse;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest  $request, Client $client): RedirectResponse

    {
        $data = $request->validated();
        $this->service->update($client, $data);

        return redirect()->route('client.show', $client->id);
    }
}
