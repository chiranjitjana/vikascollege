<?php

namespace VikasCollegeWeb\Http\Controllers;

use Illuminate\Http\Request;
use VikasCollegeWeb\StudentModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Response;
class StudentControll extends Controller
{
	public function create(Request $request)
	{
		$input = $request->all();
		
		$lastupdated = date('Y-m-d H:i:s');
		$input['stddob'] = $lastupdated;
		
		
		StudentModel::create($input);
		return "Student created";
	}
	
	
	public function fetch($id)
	{
		$data = DB::table('student_models')->where('college_id',$id)->get();
		return json_encode($data);
	}

	
	public function fetchAll()
	{
		$data= DB::table('student_models')->get();
		return json_encode($data);
	}
	
	
	public function updateProfilePic(Request $request)
	{
		DB::table('student_models')->where('college_id','=', $request->input('student_id'))->update(array('stdprofile' => $request->input('profile_pic')));
		
		$data = DB::table('student_models')->where('college_id',$request->input('student_id'))->get();
		
		return json_encode(	$data);
	}
	
	
	public function updatePassword(Request $request)
	{
		
	}
	

}
