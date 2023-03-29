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
    'jln_saluran',
    'taman',
    'rth',
    'ibadah',
    'olahraga',
    'kesehatan',
    'lain'
];
protected $table = 'psus';

public function psu()
{
    return $this->hasMany(Pengajuan::class, 'pengajuan_id');
}
}
