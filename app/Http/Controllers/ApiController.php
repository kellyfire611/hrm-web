<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ApiController extends Controller
{
    public function getTkhocham()
    {
        $parameter = [];
        $result = DB::select('call TK_NHANSU_HOCHAM()');

        return response()->json($result, 200);
    }

    public function getTktrinhdo()
    {
        $parameter = [];
        $result = DB::select('call TK_NHANSU_TRINHDO_NO_GROUP()');

        return response()->json($result, 200);
    }
}
