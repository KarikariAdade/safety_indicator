<?php

namespace App\Http\Controllers;

use App\Models\Indicator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class IndicatorController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        $validate = Validator::make($data, $this->validateFields());

        if ($validate->fails()){
            return $this->failResponse($validate->errors()->first());
        }

        DB::beginTransaction();

        try {

            Indicator::query()->create($this->dumpData($data));

            DB::commit();

            $indicator = DB::table('indicators')
                ->select(DB::raw('sum(aifr) as aifr, sum(trifr) as trifr, sum(ltirf) as ltirf, sum(lti) as lti, sum(damage_free) as damage_free'))->get();


            return response()->json(['code' => 200, 'msg' => 'Indicator added successfully', 'data' => $indicator ]);


        } catch (\Exception $e){

            DB::rollback();

            $this->logData('indicator', ':: INDICATOR ADD ERROR ::', $e->getMessage().' :: LINE ::'.$e->getLine());

            return $this->failResponse('Indicator could not be added. Kindly contact administrator');
        }
    }


    public function update(Request $request, Indicator $indicator)
    {
        $data = $request->all();

        $validate = Validator::make($data, $this->validateFields());

        if ($validate->fails()){
            return $this->failResponse($validate->errors()->first());
        }

        DB::beginTransaction();

        try {

            $indicator->update($this->dumpData($data));

            DB::commit();

            $indicator = DB::table('indicators')
                ->select(DB::raw('sum(aifr) as aifr, sum(trifr) as trifr, sum(ltirf) as ltirf, sum(lti) as lti, sum(damage_free) as damage_free'))->get();

            return response()->json(['code' => 200, 'msg' => 'Indicator added successfully', 'data' => $indicator ]);

        } catch (\Exception $e){
            DB::rollback();

            $this->logData('indicator', ':: INDICATOR UPDATE ERROR ::', $e->getMessage().' :: LINE ::'.$e->getLine());

            return $this->failResponse('Indicator could not be added. Kindly contact administrator');
        }
    }


    public function fetch(Indicator $indicator)
    {
        return response()->json([
            'code' => 200,
            'data' => $indicator,
            'url' => route('indicator.update', $indicator->id)
        ]);
    }


    public function delete(Indicator $indicator)
    {

        $indicator->delete();

        return $this->successResponse('Indicator deleted successfully');
    }

    private function validateFields()
    {
        return [
            'aifr' => 'required',
            'trifr' => 'required',
            'ltirf' => 'required',
            'lti' => 'required',
            'damage_free' => 'required',
        ];
    }


    public function dumpData($data)
    {
        return [
            'aifr' => $data['aifr'],
            'trifr' => $data['trifr'],
            'ltirf' => $data['ltirf'],
            'lti' => $data['lti'],
            'damage_free' => $data['damage_free'],
            'user_id' => auth()->user()->id
        ];
    }
}
