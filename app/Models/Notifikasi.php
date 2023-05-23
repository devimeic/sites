<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    use HasFactory;

    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $table = 'notifikasis';

    protected $casts = [
        'jadwal'=>'datetime'
    ];

    public function notifikasi()
    {
        return  $this->belongsTo(User::class, 'user_id');
    }
}
