<?php

namespace VikasCollegeWeb;

use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model {
		
	
	protected $fillable = [ 
			'college_id',
			'stdname',
			'stdstream',
			'stdclass',
			'stddob',
			'stdemail',
			'stdmobile',
			'stdprofile'
		
	
	];
}
