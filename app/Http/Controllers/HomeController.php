<?php

namespace App\Http\Controllers;
use App\Models\Invoice;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class HomeController extends Controller
{
    public function index() {
        return view('home');
    }
//TODO: тут нужен Chart.js график  линейный с суммой доходов за год месяц неделю день
// TODO: we need 404 page
}