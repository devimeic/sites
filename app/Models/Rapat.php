<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapat extends Model
{
    use HasFactory;
    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $table = 'rapats';

    public function rapat()
    {
        return  $this->belongsTo(Pengajuan::class, 'rapat_id');
    }

    protected $casts = [
        'jadwal' => 'datetime',
    ];
}
