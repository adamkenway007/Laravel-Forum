<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Balas extends Model
{
    public function pertanyaan()
    {
		return $this->belongsTo(Pertanyaan::class);
    }

    public function user()
    {
		return $this->belongsTo(User::class);
    }

    public function suka()
    {
		return $this->hasMany(Suka::class);
    }
}
