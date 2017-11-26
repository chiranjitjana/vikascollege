<?php

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */

/*
 * Route::get('/', function () {
 * return view('welcome');
 * });
 */
Auth::routes ();

Route::get ( '/home', 'HomeController@index' )->name ( 'home' );

Route::post ( '/createStudent', 'StudentControll@create' );

Route::get ( '/fetchStudent/{id}', 'StudentControll@fetch' );

Route::get ( '/fetchAllStudent', 'StudentControll@fetchAll' );

Route::post ( '/updateStudentProfilePic', 'StudentControll@updateProfilePic' );




Route::get ( '/', function () {
	
	return view ( 'website.index' );
} );

Route::get ( '/about', function () {
	
	return view ( 'website.about' );
} );


Route::get ( '/about/history', function () {
	
	return view ( 'website.history' );
} );

Route::get ( '/about/vision', function () {
	
	return view ( 'website.vission' );
} );

Route::get ( '/about/principal', function () {
	
	return view ( 'website.principal' );
} );

Route::get ( '/about/chairman', function () {
	
	return view ( 'website.chairman' );
} );

Route::get ( '/about/committee', function () {
	
	return view ( 'website.committee' );
} );

Route::get ( '/about/alumini', function () {
	
	return view ( 'website.alumini' );
} );

Route::get ( '/gallery', function () {
	
	return view ( 'website.gallery' );
} );

/* courses */
Route::get ( '/academic', function () {
	
	return view ( 'website.academic' );
} );

Route::get ( '/academic/calender', function () {

    return view ( 'website.calender' );
} );

Route::get ( '/academic/syllabus', function () {

    return view ( 'website.syllabus' );
} );

Route::get ( '/academic/courses', function () {
	
	return view ( 'website.courses' );
} );

Route::get ( '/academic/departments', function () {
	
	return view ( 'website.departments' );
} );

Route::get ( '/academic/courses/post_graduate', function () {
	
	return view ( 'website.post_graduate' );
} );

Route::get ( '/academic/courses/graduate', function () {
	
	return view ( 'website.graduate' );
} );

Route::get ( '/academic/courses/departments', function () {
	
	return view ( 'website.departments' );
} );

Route::get ( '/academic/courses/departments/faculty', function () {
	
	return view ( 'website.faculty' );
} );

Route::get ( '/admission', function () {
	
	return view ( 'website.admission' );
} );

Route::get ( '/admission/attendence', function () {
	
	return view ( 'website.attendence' );
} );
Route::get ( '/admission/character', function () {
	
	return view ( 'website.character' );
} );

Route::get ( '/admission/general_rule', function () {
	
	return view ( 'website.general_rule' );
} );

Route::get ( '/admission/refund_of_fees', function () {
	
	return view ( 'website.refund' );
} );

Route::get ( '/library', function () {
	
	return view ( 'website.library' );
} );

Route::get ( '/updates', function () {
	
	return view ( 'website.event' );
} );

Route::get ( '/facility', function () {
	
	return view ( 'website.facility' );
} );


Route::get ( '/activity', function () {
	
	return view ( 'website.activity' );
} );

Route::get ( '/updates/notice', function () {
	
	return view ( 'website.notice' );
} );

Route::get ( '/updates/event', function () {
	
	return view ( 'website.event' );
} );

Route::get ( '/updates/placement', function () {
	
	return view ( 'website.placement' );
} );

Route::get ( '/updates/alumini', function () {
	
	return view ( 'website.alumini' );
} );

Route::get ( '/contact', function () {

    return view ( 'website.contact' );
} );


		