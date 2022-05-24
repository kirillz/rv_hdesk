<?php

namespace App\Http\Controllers\Invoice;

use App\Http\Controllers\Controller;
use App\Services\Invoice\Service;

class BaseController extends Controller
{
    public Service $service;
    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
