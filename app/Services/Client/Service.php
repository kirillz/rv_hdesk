<?php

namespace App\Services\Client;

use App\Models\Client;
use Illuminate\Support\Facades\DB;

class Service
{
    public function store($data)
    {
        //dd($data);
        Client::create($data);
    }
    public function update($client, $data)
    {
        //dd($data);
        $client->update($data);
    }
    public function getClientsCount()
    {
        return DB::table('client')->count();
    }
}
