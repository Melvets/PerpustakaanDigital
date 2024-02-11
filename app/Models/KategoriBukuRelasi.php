<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBukuRelasi extends Model
{
    use HasFactory;

    protected $table = "kategoribuku_relasi";
    protected $guarded = ['id'];

    public function Buku()
    {
        return $this->belongsTo(Buku::class, 'buku_id', 'id');
    }

    public function KategoriBuku()
    {
        return $this->belongsTo(KategoriBuku::class, 'kategori_id', 'id');
    }
}
