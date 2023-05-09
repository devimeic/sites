<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekomendasi extends Model
{
    use HasFactory;

    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $table = 'rekomendasis';

    public function rekomen()
    {
        return  $this->belongsTo(Rekomendasi::class, 'pengajuan_id');
    }
}
