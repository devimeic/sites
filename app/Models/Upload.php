<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;

    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $fillable = [
        'pengajuan_id',
        'berkas_id',
        'lokasi_berkas',
        'catatan',
        'status_berkas',
        'status_pengajuan',
        'status_lapangan'

    ];
    protected $table = 'tb_upload';

    public function pengajuan()
    {
        return $this->belongsTo(Pengajuan::class, 'pengajuan_id');
    }
    public function berkas()
    {
        return $this->belongsTo(Berkas::class, 'berkas_id');
    }
}
