<?php

namespace App\Services\Client;

use App\Models\Client;

class Service
{
  public function store($data) {
    //dd($data);
    Client::create($data);
  }
  public function update($client, $data) {
    //dd($data);
    $client->update($data);
  }

}
