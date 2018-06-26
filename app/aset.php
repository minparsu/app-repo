<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class aset extends Model
{
    protected $table = 'aset';

    protected $fillable = [
    	'id_aplikasi',
    	'aplikasi',
    	'deskripsi',
    	'programmer',
    	'tgl_liveprod'
    ];

    //protected $dates =['tgl_liveprod'];

    public function getProgrammerAttribute($programmer)
    {
    	return ucwords($programmer);
    } 

	public function setProgrammerAttribute($programmer)
    {
    	$this -> attributes ['programmer'] = strtolower($programmer);
    } 

    
}
