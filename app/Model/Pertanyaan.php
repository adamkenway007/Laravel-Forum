<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
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
}
