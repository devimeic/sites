<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;
    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $table = 'pengajuans';

    public function pengaju()
    {
        return  $this->belongsTo(User::class, 'pengaju');
    }
    public function rapat()
    {
        return $this->hasOne(Rapat::class,'rapat_id');
    }

    public function bangunan()
    {
        return $this->hasMany(tipe::class,'pengajuan_id');
    }
    public function upload()
    {
        return $this->hasMany(Upload::class,'pengajuan_id');
    }
}
