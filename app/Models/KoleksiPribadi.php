<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KoleksiPribadi extends Model
{
    use HasFactory;

    protected $table = "koleksipribadi";
    protected $guarded = ['id'];

    public function User()
    {
        return $this->belongsToMany(User::class, 'user_id', 'id');
    }

    public function Buku()
    {
        return $this->belongsTo(Buku::class, 'buku_id', 'id');
    }
}
