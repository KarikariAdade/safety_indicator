<?php

namespace App\Http\Controllers;

use App\DataTables\IndicatorDatatable;
use App\Models\Indicator;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['filterStatistics, welcomePage']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(IndicatorDatatable $datatable)
    {

        $indicator = DB::table('indicators')
//            ->whereBetween('created_at', [now()->startofWeek(), now()->endofWeek()])
            ->select(DB::raw('sum(aifr) as aifr, sum(trifr) as trifr, sum(ltirf) as ltirf, sum(lti) as lti, sum(damage_free) as damage_free'))->get();

        return $datatable->render('home', compact('indicator'));
    }





}
