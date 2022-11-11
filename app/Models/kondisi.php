<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kondisi extends Model
{
    protected $table = "kondisis";
 
    public function pengguna()
    {
    	return $this->belongsToMany(Pengguna::class);
    }
}
