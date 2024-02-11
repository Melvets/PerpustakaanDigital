<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBuku extends Model
{
    use HasFactory;

    protected $table = "kategoribuku";
    protected $guarded = ['id'];

    public function KategoriBukuRelasi()
    {

    }
}
