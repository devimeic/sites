<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    use HasFactory;

    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $fillable = [
        'pengajuan_id',
        'kategori',
        'tipe',
        'juml_unit',

    ];
    protected $table = 'tb_tipe';

    public function tipe()
    {
        return $this->hasMany(Pengajuan::class, 'pengajuan_id');
    }
}
