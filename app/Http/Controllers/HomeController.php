<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    //

    public function index(){

        return view('index');
    }

    public function student_post(Request $request)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['roll'] = $request->roll;
        $data['subject'] = $request->subject;
        DB::table('students')->insert($data);
        return response()->json([
            'status' => '201',
            'message' => 'success',
        ]);
    }

}
