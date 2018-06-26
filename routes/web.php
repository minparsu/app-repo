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

Route::get('/', 'PagesController@homepage');
Route::get('about','PagesController@about');

Route::group(['middleware'=> ['web']], function() {
      Route::get('aset', 'AsetController@index');
Route::get('aset/create', 'AsetController@create');
Route::get('aset/{aset}','AsetController@show');
Route::post('aset', 'AsetController@store');
Route::get('aset/{aset}/edit', 'AsetController@edit');
Route::patch('aset/{aset}', 'AsetController@update');
Route::delete('aset/{aset}', 'AsetController@destroy');
});







Route::get('tescollection', 'AsetController@tesCollection');
//Route::get('date-mutator', 'AsetController@dateMutator');

// Route::get('aset', 'SiswaController@index');
// Route::get('aset/create', 'SiswaController@create');
 

/*
Route::get('sampledata', function(){
	DB::table('aset') -> insert ([
		[
			'id_aplikasi'	=>	'1001',
            'aplikasi'		=>	'antrian online',
            'deskripsi'		=>	'sistem antrian online berbasis android untuk antrian layanan kependudukan dan pencatatan sipil pada dinas dukcapil kota samarinda',
            'programmer'	=>	'tim britech',
            'tgl_liveprod'	=>	'2018-07-01'
		],

		[
			'id_aplikasi'	=>	'1002',
            'aplikasi'		=>	'api',
            'deskripsi'		=>	'aplication programming interface',
            'programmer'	=>	'tim enterwind',
            'tgl_liveprod'	=>	'2017-06-01'
		],
		[
			'id_aplikasi'	=>	'1003',
            'aplikasi'		=>	'ewarga',
            'deskripsi'		=>	'aplikasi berbasis android untuk interaksi warga untuk mendapatkan layanan kantor kelurahan',
            'programmer'	=>	'tim ismail',
            'tgl_liveprod'	=>	'2017-06-01'
		],
		[
			'id_aplikasi'	=>	'1004',
            'aplikasi'		=>	'ekelurahan',
            'deskripsi'		=>	'aplikasi berbasis web untuk interaksi ASN Kelurahan dengan warga untuk kebutuhan office automation',
            'programmer'	=>	'tim ismail',
            'tgl_liveprod'	=>	'2017-06-01'
		],
		[
			'id_aplikasi'	=>	'1005',
            'aplikasi'		=>	'panic button',
            'deskripsi'		=>	'aplikasi berbasis android untuk interaksi ketua RT dengan Smart Command center',
            'programmer'	=>	'tim aziz',
            'tgl_liveprod'	=>	'2018-01-01'
		],
		[
			'id_aplikasi'	=>	'1006',
            'aplikasi'		=>	'dashboard smart city',
            'deskripsi'		=>	'aplikasi berbasis web sebagai dashboard command center pemerintah kota samarinda',
            'programmer'	=>	'tim aziz',
            'tgl_liveprod'	=>	'2018-01-01'
		],
	]);
});
*/