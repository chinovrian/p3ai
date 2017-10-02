<?php

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

Route::auth();

Route::group(['middleware' => ['auth']], function() {

	Route::resource('users','UserController');
	Route::get('/home', 'HomeController@index')->name('home');

	Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index']);
	Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:role-create']]);
	Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:role-create']]);
	Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
	Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);
	Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-edit']]);
	Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]);

	//dosen
	Route::get('dosen',['as'=>'dosen.index','uses'=>'DosenController@index']);	
	Route::get('dosen/create',['as'=>'dosen.create','uses'=>'DosenController@create']);
	Route::post('dosen/create',['as'=>'dosen.store','uses'=>'DosenController@store']);
	Route::get('dosen/{id}',['as'=>'dosen.show','uses'=>'DosenController@show']);
	Route::get('dosen/{id}/edit',['as'=>'dosen.edit','uses'=>'DosenController@edit']);
	Route::patch('dosen/{id}',['as'=>'dosen.update','uses'=>'DosenController@update']);
	Route::delete('dosen/{id}',['as'=>'dosen.destroy','uses'=>'DosenController@destroy']);
	Route::get('/dosenImage/{filename}',[ 'uses'=>'DosenController@getDosenImage','as'=>'dosen.image']);

	//asessor
	Route::get('asessor',['as'=>'asessor.index','uses'=>'AsessorController@index']);	
	Route::get('asessor/create',['as'=>'asessor.create','uses'=>'AsessorController@create']);
	Route::post('asessor/create',['as'=>'asessor.store','uses'=>'AsessorController@store']);
	Route::get('asessor/{id}',['as'=>'asessor.show','uses'=>'AsessorController@show']);
	Route::get('asessor/{id}/edit',['as'=>'asessor.edit','uses'=>'AsessorController@edit']);
	Route::patch('asessor/{id}',['as'=>'asessor.update','uses'=>'AsessorController@update']);
	Route::delete('asessor/{id}',['as'=>'asessor.destroy','uses'=>'AsessorController@destroy']);
	Route::get('/asessorImage/{filename}',[ 'uses'=>'AsessorController@getAsessorImage','as'=>'asessor.image']);

	//rps
	Route::get('rps',['as'=>'rps.index','uses'=>'RpsController@index']);	
	Route::get('rps/create',['as'=>'rps.create','uses'=>'RpsController@create']);
	Route::post('rps/create',['as'=>'rps.store','uses'=>'RpsController@store']);
	Route::get('rps/{id}/edit',['as'=>'rps.edit','uses'=>'RpsController@edit']);
	Route::patch('rps/{id}',['as'=>'rps.update','uses'=>'RpsController@update']);
	Route::delete('rps/{id}',['as'=>'rps.destroy','uses'=>'RpsController@destroy']);
	

	//kurikulum
	Route::get('kurikulum',['as'=>'kurikulum.index','uses'=>'KurikulumController@index']);	
	Route::get('kurikulum/create',['as'=>'kurikulum.create','uses'=>'KurikulumController@create']);
	Route::post('kurikulum/create',['as'=>'kurikulum.store','uses'=>'KurikulumController@store']);
	Route::get('kurikulum/{id}/edit',['as'=>'kurikulum.edit','uses'=>'KurikulumController@edit']);
	Route::patch('kurikulum/{id}',['as'=>'kurikulum.update','uses'=>'KurikulumController@update']);
	Route::delete('kurikulum/{id}',['as'=>'kurikulum.destroy','uses'=>'KurikulumController@destroy']);

	//bahanajar

	Route::get('bahanajar',['as'=>'bahanajar.index','uses'=>'bahanajarController@index']);	
	Route::get('bahanajar/create',['as'=>'bahanajar.create','uses'=>'bahanajarController@create']);
	Route::post('bahanajar/create',['as'=>'bahanajar.store','uses'=>'bahanajarController@store']);
	Route::get('bahanajar/{id}',['as'=>'bahanajar.show','uses'=>'bahanajarController@show']);
	Route::get('bahanajar/{id}/edit',['as'=>'bahanajar.edit','uses'=>'bahanajarController@edit']);
	Route::patch('bahanajar/{id}',['as'=>'bahanajar.update','uses'=>'bahanajarController@update']);
	Route::delete('bahanajar/{id}',['as'=>'bahanajar.destroy','uses'=>'bahanajarController@destroy']);

	//serdos
	Route::get('serdos',['as'=>'serdos.index','uses'=>'SerdosController@index']);	
	Route::get('serdos/create',['as'=>'serdos.create','uses'=>'SerdosController@create']);
	Route::post('serdos/create',['as'=>'serdos.store','uses'=>'SerdosController@store']);
	Route::get('serdos/{id}',['as'=>'serdos.show','uses'=>'SerdosController@show']);
	Route::get('serdos/{id}/edit',['as'=>'serdos.edit','uses'=>'SerdosController@edit']);
	Route::patch('serdos/{id}/ed',['as'=>'serdos.update','uses'=>'SerdosController@update']);
	Route::delete('serdos/{id}',['as'=>'serdos.destroy','uses'=>'SerdosController@destroy']);

	Route::get('serdos/{id}/pilihAsessor',['as'=>'serdos.pilihasessor','uses'=>'SerdosController@asessorpilih']);
	Route::patch('serdos/{id}/up',['as'=>'serdos.updateasessor','uses'=>'SerdosController@updateAsessor']);

	Route::get('serdos/{id}/cek',['as'=>'serdos.cek','uses'=>'SerdosController@cek']);
	Route::patch('serdos/{id}',['as'=>'serdos.updateCek','uses'=>'SerdosController@updateCek']);


	Route::get('serdos/{id}/',['as'=>'serdos.cekLagi','uses'=>'SerdosController@cekLagi']);
	Route::patch('serdos/{id}/updatecek',['as'=>'serdos.updateCeknya','uses'=>'SerdosController@updateCeknya']);



//jurusan
	Route::get('jurusan',['as'=>'jurusan.index','uses'=>'JurusanController@index']);	
	Route::get('jurusan/create',['as'=>'jurusan.create','uses'=>'JurusanController@create']);
	Route::post('jurusan/create',['as'=>'jurusan.store','uses'=>'JurusanController@store']);
	Route::get('jurusan/{id}',['as'=>'jurusan.show','uses'=>'JurusanController@show']);
	Route::get('jurusan/{id}/edit',['as'=>'jurusan.edit','uses'=>'JurusanController@edit']);
	Route::patch('jurusan/{id}',['as'=>'jurusan.update','uses'=>'JurusanController@update']);
	Route::delete('jurusan/{id}',['as'=>'jurusan.destroy','uses'=>'JurusanController@destroy']);
	Route::delete('jurusan/{id}',['as'=>'jurusan.destroy','uses'=>'JurusanController@destroy']);
	//prodi
	Route::get('prodi',['as'=>'prodi.index','uses'=>'ProdiController@index']);	
	Route::get('prodi/create',['as'=>'prodi.create','uses'=>'ProdiController@create']);
	Route::post('prodi/create',['as'=>'prodi.store','uses'=>'ProdiController@store']);
	Route::get('prodi/{id}',['as'=>'prodi.show','uses'=>'ProdiController@show']);
	Route::get('prodi/{id}/edit',['as'=>'prodi.edit','uses'=>'ProdiController@edit']);
	Route::patch('prodi/{id}',['as'=>'prodi.update','uses'=>'ProdiController@update']);
	Route::delete('prodi/{id}',['as'=>'prodi.destroy','uses'=>'ProdiController@destroy']);

	Route::post('dosen/ca',['as'=>'dosen.createAsessor','uses'=>'SerdosController@store']);



	//bkd
	Route::get('bkd',['as'=>'bkd.index','uses'=>'BkdController@index']);
	Route::get('bkd/{id}/edit',['as'=>'bkd.edit','uses'=>'BkdController@edit']);
	Route::patch('bkd/{id}',['as'=>'bkd.update','uses'=>'BkdController@update']);
	Route::delete('bkd/{id}/del',['as'=>'bkd.delete','uses'=>'BkdController@destroy']);


	//reportpeserta
	Route::get('report/selectpeserta',['as'=>'rekappeserta.selectpeserta','uses'=>'SerdosController@selectpeserta']);
	Route::post('report/selectpesrta/filter',['as'=>'rekappeserta.filterpeserta','uses'=>'SerdosController@filterpeserta']);
	Route::get('report/selectpesertaPdf/{t}/{sm}',['as'=>'rekappeserta.setpdfpeserta','uses'=>'SerdosController@setpdfpeserta']);

	//reportbkd
	Route::get('report/selectbkd',['as'=>'rekapbkd.selectbkd','uses'=>'BkdController@selectbkd']);
	Route::post('report/selectbkd/filter',['as'=>'rekapbkd.filterbkd','uses'=>'BkdController@filterbkd']);
	//Route::get('report/selectbkdPdf/{t}/{s}/{kt}',['as'=>'rekapbkd.setpdfbkd','uses'=>'BkdController@setpdfbkd']);

});

