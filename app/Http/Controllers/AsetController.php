<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Aset;
use Illuminate\Support\Facades\validator;


class AsetController extends Controller
{
    public function index() 
    {
    $aset_list = Aset::orderBy('aplikasi','asc') -> Paginate(4);
    $jumlah_aplikasi = Aset::count();
    
    return view('aset.index',compact('halaman','aset_list', 'jumlah_aplikasi'));
	}

	public function create()
	{
		return view('aset.create', compact ('halaman'));
	}

   /* public function store (Request $request)
    {
		$aset = new \App\Aset;
		$aset->id_aplikasi 		= $request ->id_aplikasi;
		$aset->aplikasi 		= $request ->aplikasi;
		$aset->deskripsi 		= $request ->deskripsi;
		$aset->programmer 		= $request ->programmer;
		$aset->tgl_liveprod 	= $request ->tgl_liveprod;
		$aset->save();
		return redirect ('aset');
	} */

	public function store (Request $request)
	{
		//Aset::create($request->all());
		//return redirect('aset');

		$input = $request -> all();

		$validator = Validator::make($input, [
		'id_aplikasi' 	=> 'required|string|size:4|unique:aset,id_aplikasi',
		'aplikasi' 		=> ' required|string|max:30',
		'deskripsi' 		=> 'required|string|max:140',
		'programmer' 		=> 'required|string|max:40',
		'tgl_liveprod' 		=> ' required|date',
		]);
		if ($validator -> fails()) {
			return redirect ('aset/create')
					-> withInput() 
					-> withErrors($validator);
		}
		aset::create($input);
		return redirect ('aset');
	}

	public function show($id) 
    {
    $aset = Aset::findOrFail($id);
    return view('aset.show',compact('halaman','aset'));
	}

	public function edit ($id)
	{
		 $aset = Aset::findOrFail($id);
		return view('aset.edit',compact('aset'));
	}

	public function update($id, Request $request) 
    {
   // $aset = Aset::findOrFail($id);
    //$aset ->update($request->all());
    //return redirect ('aset');

$aset = Aset::findOrFail($id);
$input = $request -> all();

		$validator = Validator::make($input, [
		'id_aplikasi' 	=> 'required|string|size:4|unique:aset,id_aplikasi,' .$request -> input('id'),
		'aplikasi' 		=> ' required|string|max:30',
		'deskripsi' 		=> 'required|string|max:140',
		'programmer' 		=> 'required|string|max:40',
		'tgl_liveprod' 		=> ' required|date',
		]);

		if ($validator -> fails()) {
			return redirect ('aset/' . $id . '/edit')
					-> withInput() 
					-> withErrors($validator);
		}
		$aset -> update ($request -> all());
		return redirect ('aset');
	}


	public function destroy($id) 
    {
    $aset = Aset::findOrFail($id);
    $aset ->delete();
    return redirect ('aset');
	}

	/*public function dateMutator()
	{
		$aset = aset::findOrFail();
		return 'umur aset ini adalah :'.
		$aset -> tgl_liveprod -> age. 'tahun.';
	} */

	//function koleksi ke json
	/* public function tesCollection()
	{
		$data = [
			['id_aplikasi' => '1001', 'nama_aplikasi' => 'suparmin'],
			['id_aplikasi' => '1002', 'nama_aplikasi' => 'dadi sutrisno'],
			['id_aplikasi' => '1001', 'nama_aplikasi' => 'gary setiawan'],
		];
		$koleksi = collect($data);
		$koleksi -> toJson();
		return $koleksi; 
	} */
}
