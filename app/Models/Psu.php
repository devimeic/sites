<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psu extends Model
{
    use HasFactory;

    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $fillable = [
        'pengajuan_id',
    'psu',
    'luas',
    'keterangan',

];
protected $table = 'tb_psu';

public function psu()
{
    return $this->belongsTo(Pengajuan::class, 'pengajuan_id');
}
}
