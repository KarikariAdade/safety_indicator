<?php

namespace App\Http\Controllers;

use App\Models\Indicator;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    public function filterStatistics(Request $request)
    {
        if ($request->ajax()){

            $data = $request->all();

            $validate = Validator::make($data, ['start_date' => 'required', 'end_date' => 'required']);

            if ($validate->fails()){
                return $this->failResponse($validate->errors()->first());
            }

            $indicator = DB::table('indicators')
                ->whereBetween('created_at', [Carbon::parse($data['start_date'])->startOfDay(), Carbon::parse($data['end_date'])->endOfDay()])
                ->select(DB::raw('sum(aifr) as aifr, sum(trifr) as trifr, sum(ltirf) as ltirf, sum(lti) as lti, sum(damage_free) as damage_free'))->get();

            return $this->successResponse($indicator);
        }
    }


    public function welcomePage()
    {
        $indicator = DB::table('indicators')
            ->whereBetween('created_at', [now()->startOfWeek(), now()->endofWeek()])
            ->select(DB::raw('sum(aifr) as aifr, sum(trifr) as trifr, sum(ltirf) as ltirf, sum(lti) as lti, sum(damage_free) as damage_free'))->get();


        if (request()->ajax()){
            return $this->successResponse($indicator);
        }
        $graph_data = DB::table('indicators')->select(DB::raw('DATE_FORMAT(created_at, "%M") as month, sum(aifr) as aifr, sum(trifr) as trifr, sum(ltirf) as ltirf, sum(lti) as lti, sum(damage_free) as damage'))
            ->groupBy('month')
            ->whereYear('created_at', date('Y'))
            ->get();

//        return $graph_data;

        return view('welcome', compact('indicator', 'graph_data'));
    }
}
