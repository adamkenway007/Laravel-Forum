<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
	public function getRouteKeyName()
	{
		return 'slug';
	}

	// protected $fillable = ['title','slug','body','category_id','user_id'];

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
    	return $this->hasMany(Kategori::class);
    }

    public function getPathAttribute()
    {
    	return asset("api/pertanyaan/$this->slug");
    }
}
