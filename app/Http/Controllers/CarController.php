<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function getData()
    {
        $data = DB::table('test_admin')
            -> get();

        return response()->json($data);
    }

    public function insertData(Request $request)
    {
        $data = $request->all();
        $res = DB::table('test_admin')
            -> insert($data);
        if($res){
            return 'true';
        }else{
            return 'false';
        }
        
    }

    //
}
