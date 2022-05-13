<?php

namespace App\Http\Controllers\Invoice;

use App\Http\Requests\Invoice\StoreRequest;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        return redirect()->route('invoice.index');
    }
}
