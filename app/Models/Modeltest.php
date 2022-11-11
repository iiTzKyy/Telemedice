<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modeltest extends Model
{
    use HasFactory;
    protected $table = 'modeltests';
    
    public function user(){
        return $this->hasMany(Pengguna::class);
    }
}
