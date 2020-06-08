<?php

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

Route::get('/', 'MainController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


      Route::get('user','CustomerController@index')->name('user');
     Route::get('/user/add','CustomerController@create')->name('user.create');
     Route::post('/user/store','CustomerController@store')->name('user.store');
     Route::post('/user/destroy/{id}','CustomerController@destroy')->name('user.destroy');
     Route::get('/user/edit/{id}','CustomerController@edit')->name('user.edit');
     Route::get('/user/show/{id}','CustomerController@show')->name('user.show');
     Route::post('/user/update/','CustomerController@update')->name('user.update');

     Route::get('/user/file/add','CustomerController@createfile')->name('user.create.file');
     Route::post('/user/file/store','CustomerController@storefile')->name('user.store.file');


     Route::get('/success', 'CustomerController@success')->name('success');

     Route::get('state','AreaController@index')->name('state');
     Route::get('/state/add','AreaController@create')->name('state.create');
     Route::post('/state/store','AreaController@store')->name('state.store');
     Route::post('/state/destroy/{id}','AreaController@destroy')->name('state.destroy');
     Route::get('/state/edit/{id}','AreaController@edit')->name('state.edit');
     Route::get('/state/show/{id}','AreaController@show')->name('state.show');
     Route::post('/state/update/','AreaController@update')->name('state.update');

     Route::get('city','AreaController@indexcity')->name('city');
     Route::get('/city/add','AreaController@createcity')->name('city.create');
     Route::post('/city/store','AreaController@storecity')->name('city.store');
     Route::post('/city/destroy/{id}','AreaController@destroycity')->name('city.destroy');
     Route::get('/city/edit/{id}','AreaController@editcity')->name('city.edit');
     Route::get('/city/show/{id}','AreaController@showcity')->name('city.show');
     Route::post('/city/update/','AreaController@updatecity')->name('city.update');


     Route::get('district','AreaController@indexdistrict')->name('district');
     Route::get('/district/add','AreaController@createdistrict')->name('district.create');
     Route::post('/district/store','AreaController@storedistrict')->name('district.store');
     Route::post('/district/destroy/{id}','AreaController@destroydistrict')->name('district.destroy');
     Route::get('/district/edit/{id}','AreaController@editdistrict')->name('district.edit');
     Route::get('/district/show/{id}','AreaController@showdistrict')->name('district.show');
     Route::post('/district/update/','AreaController@updatedistrict')->name('district.update');


     Route::get('thana','AreaController@indexthana')->name('thana');
     Route::get('/thana/add','AreaController@createthana')->name('thana.create');
     Route::post('/thana/store','AreaController@storethana')->name('thana.store');
     Route::post('/thana/destroy/{id}','AreaController@destroythana')->name('thana.destroy');
     Route::get('/thana/edit/{id}','AreaController@editthana')->name('thana.edit');
     Route::get('/thana/show/{id}','AreaController@showthana')->name('thana.show');
     Route::post('/thana/update/','AreaController@updatethana')->name('thana.update');


     Route::get('ljob','AreaController@indexljob')->name('ljob');
     Route::get('/ljob/add','AreaController@createljob')->name('ljob.create');
     Route::post('/ljob/store','AreaController@storeljob')->name('ljob.store');
     Route::post('/ljob/destroy/{id}','AreaController@destroyljob')->name('ljob.destroy');
     Route::get('/ljob/edit/{id}','AreaController@editljob')->name('ljob.edit');
     Route::get('/ljob/show/{id}','AreaController@showljob')->name('ljob.show');
     Route::post('/ljob/update/','AreaController@updateljob')->name('ljob.update');



     Route::get('ejob','AreaController@indexejob')->name('ejob');
     Route::get('/ejob/add','AreaController@createejob')->name('ejob.create');
     Route::post('/ejob/store','AreaController@storeejob')->name('ejob.store');
     Route::post('/ejob/destroy/{id}','AreaController@destroyejob')->name('ejob.destroy');
     Route::get('/ejob/edit/{id}','AreaController@editejob')->name('ejob.edit');
     Route::get('/ejob/show/{id}','AreaController@showejob')->name('ejob.show');
     Route::post('/ejob/update/','AreaController@updateejob')->name('ejob.update');

     Route::get('/findCityName','AreaController@findCityName');
     Route::get('/findThanaName','AreaController@findThanaName');

 Route::get('/print/user/{id}','CustomerController@print')->name('user.print');


     Route::get('Visa_Status','MainController@indexvs')->name('vs');
     Route::get('/Visa_Status/add','MainController@createvs')->name('vs.create');
     Route::post('/Visa_Status/store','MainController@storevs')->name('vs.store');
     Route::post('/Visa_Status/destroy/{id}','MainController@destroyvs')->name('vs.destroy');
     Route::get('/Visa_Status/edit/{id}','MainController@editvs')->name('vs.edit');
     Route::get('/Visa_Status/show/{id}','MainController@showvs')->name('vs.show');
     Route::post('/Visa_Status/update/','MainController@updatevs')->name('vs.update');

     Route::get('address','MainController@indexad')->name('ad');
     Route::get('/address/add','MainController@createad')->name('ad.create');
     Route::post('/address/store','MainController@storead')->name('ad.store');
     Route::post('/address/destroy/{id}','MainController@destroyad')->name('ad.destroy');
     Route::get('/address/edit/{id}','MainController@editad')->name('ad.edit');
     Route::get('/address/show/{id}','MainController@showad')->name('ad.show');
     Route::post('/address/update/','MainController@updatead')->name('ad.update');


      Route::post('/admin/update-items', 'MainController@updateItems')->name('update.items');
      Route::post('/admin/update-items1', 'MainController@updateItems1')->name('update.items1');
      Route::post('/admin/update-items2', 'MainController@updateItems2')->name('update.items2');

      
      

      Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function (){

          Route::get('/dashboard','UserController@dasad')->name('home');

     Route::get('user','UserController@index')->name('user');
     Route::get('/user/add','UserController@create')->name('user.create');
     Route::post('/user/store','UserController@store')->name('user.store');
     Route::post('/user/destroy/{id}','UserController@destroy')->name('user.destroy');
     Route::get('/user/edit/{id}','UserController@edit')->name('user.edit');
     Route::get('/user/show/{id}','UserController@show')->name('eusershow');
     Route::post('/user/update/','UserController@update')->name('user.update');
      Route::put('/user/{id}/approve','UserController@approval')->name('user.active');
     Route::put('/user/{id}/inactive','UserController@inactive')->name('user.inactive');

     Route::get('agent/user','UserController@indexa')->name('agent.user');
     Route::get('/agent/user/add','UserController@createa')->name('agent.user.create');
     Route::post('/agent/user/store','UserController@storea')->name('agent.user.store');
     Route::post('/agent/user/destroy/{id}','UserController@destroya')->name('agent.user.destroy');
     Route::get('/agent/user/edit/{id}','UserController@edita')->name('agent.user.edit');
     Route::get('/agent/user/show/{id}','UserController@showa')->name('agent.user.show');
     Route::post('/agent/user/update/','UserController@updatea')->name('agent.user.update');
     Route::get('/agent/print/user/{id}','UserController@printa')->name('agent.user.print');

      Route::get('/setting','SettingController@index')->name('setting');
      Route::put('/setting/password','SettingController@updatePassword')->name('update');

          });


      Route::group(['as'=>'user.','prefix'=>'user','namespace'=>'User','middleware'=>['auth','user']], function (){
           Route::get('/dashboard','UserController@das')->name('home');



     Route::get('applicant','ApplicantController@index')->name('applicant');
     Route::get('/applicant/add','ApplicantController@create')->name('applicant.create');
     Route::post('/applicant/store','ApplicantController@store')->name('applicant.store');
     Route::post('/applicant/destroy/{id}','ApplicantController@destroy')->name('applicant.destroy');
     Route::get('/applicant/edit/{id}','ApplicantController@edit')->name('applicant.edit');
     Route::get('/applicant/show/{id}','ApplicantController@show')->name('applicant.show');
     Route::post('/applicant/update/','ApplicantController@update')->name('applicant.update');

     Route::get('/applicant/file/add','ApplicantController@createfile')->name('applicant.create.file');
     Route::post('/applicant/file/store','ApplicantController@storefile')->name('applicant.store.file');
     Route::get('/success', 'ApplicantController@success')->name('success');
});