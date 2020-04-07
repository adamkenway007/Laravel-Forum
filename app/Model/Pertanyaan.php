<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Pertanyaan extends Model
{
	public function getRouteKeyName()
	{
		return 'slug';
	}

	protected $guarded = [];
	

    public function user() 
    {
     	return $this->belongsTo(User::class);
    }

    public function balas() 
    {
    	return $this->hasMany(Balas::class);
    }

    public function kategori() 
    {
    	return $this->belongsTo(Kategori::class);
    }

    public function getPathAttribute()
    {
    	return asset("api/pertanyaan/$this->slug");
    }
}
