<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\Client\Service;

class BaseController extends Controller
{
  public $clientService;
  public function __construct(ClientService $clientService)
  {
    $this->clientService = $clientService;
  }
}
