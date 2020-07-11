<?php
use App\test;
use App\User;
use App\doctor;
use App\appointment;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/v', function () {

return view('live_search');
});
Route::get('/test', function () {

return view('doctor.create');

});
Route::get('/live_search', 'DoctorController@store');
Route::get('/live_search/action', 'DoctorController@action')->name('live_search.action');
Route::get('/search','DoctorController@search');
Route::get('/stor','DoctorController@store');
Route::get('/createA','PatientController@create');
Route::get('/viewA','DoctorController@indexA')->name('viewA');
Route::get('/viewP','AdminController@indexP')->name('viewP');

Route::get('/viewAd','AdminController@indexA')->name('viewAd');
Route::get('/viewAP','PatientController@indexA')->name('viewAP')->middleware('type');
Route::get('/createD','AdminController@createD')->name('create_doctor');

Route::get('/editA/{id}','DoctorController@editA')->name('doctor.editA');
Route::patch('/updateA/{id}','DoctorController@updateA')->name('doctor.updateA');
Route::get('/editAd/{id}','AdminController@editA')->name('admin.editAd');
Route::patch('/updateAd/{id}','AdminController@updateA')->name('admin.updateAd');
Route::get('/editAP/{id}','AdminController@editAP')->name('admin.editAP');
Route::patch('/updateAP/{id}','AdminController@updateAP')->name('admin.updateAP');
Route::get('/editP/{id}','AdminController@editP')->name('admin.editP');
Route::patch('/updateP/{id}','AdminController@updateP')->name('admin.updateP');
Route::post('/create/doctor','AdminController@storeDoctor')->name('CreateDoctor');

Route::get('/tt', function () {
 $appointments=auth()->user()->doctor->appointment;;
return  $appointments; });
Route::get('/ttt', function () {
 $appointments=appointment::find(1)->patient->fees;;
return  $appointments; });
Route::get('/appointment/all', function () {
	$appointments=App\appointment::all();

return view('appointment')->with('appointments',$appointments);
});
Route::get('/appointment/a', function () {
	$appointments=App\user::find(1);

return $appointments->doctor;
});
Route::resource('appointment', 'AppointmentController');
Route::resource('doctor', 'DoctorController');
Route::resource('patient', 'PatientController');
Route::resource('admina', 'AdminController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
