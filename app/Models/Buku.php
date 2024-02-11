<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = "buku";
    protected $guarded = ['id'];

    public function UlasanBuku()
    {

    }

    public function KoleksiPribadi()
    {

    }

    public function Peminjaman()
    {

    }

    public function KategoriBukuRelasi()
    {

    }
}
