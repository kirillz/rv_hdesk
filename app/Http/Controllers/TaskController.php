<?php

namespace App\Http\Controllers;

use App\DataTables\ClientDataTable;
use App\Models\Client;
use App\Models\Invoice;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;
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
        $tasks = Task::all();
        return view('task.create', compact('tasks'));
    }
    public function store(): RedirectResponse
    {
        $data = request()->validate([
            'name' => 'string',
            'description' => 'string',
            'ds' => 'string',
            'descron' => 'string',
        ]);
        //dd($data);
        Task::create($data);
        return redirect()->route('client.index');
    }



}
