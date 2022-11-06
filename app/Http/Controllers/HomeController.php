<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    //

    public function index(){
        $data = DB::table('students')->get();
        return view('index',compact('data'));
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

    public function delete_student($id)
    {
        DB::table('students')->where('id',$id)->delete();
        return response()->json('success');
    }

}
