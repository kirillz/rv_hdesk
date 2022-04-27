<?php

namespace App\Http\Controllers;

use App\DataTables\ClientDataTable;
use App\Models\Client;
use App\Models\Invoice;
use Illuminate\Http\Request;


class TaskController extends Controller
{

        public function index(ClientDataTable $dataTable)
    {
        //$invoices = Invoice::find(1);
        $clients = Client::all();
        //dd($invoices->client);
        //$clients = Client::where('invoice_id', $invoices->id)->get();
        //dump($clients);
        //return view('client.index', compact('clients'));
        return $dataTable->render('task.index');

    }
    public function create()
    {
        $task = Task::all();
        return view('task.create', compact('tasks'));
    }



}
