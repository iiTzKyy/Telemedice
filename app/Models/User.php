<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'id_user',
        'fullname',
        'level',
        'email',
        'password',
        'domisili',
        'goldar',
        'riwayat_penyakit',
        'batuk',
        'demam',
        'sesak',
        'kepala',
        'tenggorokan',
        'nyeri',
        'saturasi',
        'kondisi_id',
        'riwayat',
        'fisik',
        'keluarga',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = ['point_total'];

    public function getPointTotalAttribute()
    {
     return $this->batuk+$this->demam+$this->sesak+$this->kepala+$this->tenggorokan+$this->nyeri;
    }

}

class Pengguna extends Model
{
    protected $table = "users";

    public function kondisi(){
    	return $this->belongsToMany(kondisi::class);
    }
}
