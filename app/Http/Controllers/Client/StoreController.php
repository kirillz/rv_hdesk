<?php

namespace App\Http\Controllers\Client;
use App\Http\Requests\Client\StoreRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\Client;
use Illuminate\Routing\Controller;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('client.index');
    }
}
