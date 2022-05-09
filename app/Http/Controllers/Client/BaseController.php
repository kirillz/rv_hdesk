<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\Client\Service;

class BaseController extends Controller
{
  public Service $service;
  public function __construct(Service $service)
  {
    $this->clientService = $clientService;
  }
}
