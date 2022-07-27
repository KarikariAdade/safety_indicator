<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function successResponse($msg)
    {
        return response()->json(['code' => 200, 'msg' => $msg]);
    }


    public function failResponse($msg)
    {
        return response()->json(['code' => 401, 'msg' => $msg]);
    }

    public function logData($channel, $title, $message)
    {
        return Log::channel($channel)->error($title, ['message' => $message]);
    }
}
