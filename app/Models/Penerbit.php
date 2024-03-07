<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    use HasFactory;

    protected $table = "penerbit";
    public $timestamps = false;
    protected $fillable = [
        'kode',
        'nama',
        'alamat',
        'telepon',

    ];
    public function buku() {
        return $this->hasMany(Buku::class, 'penerbit', 'id');
    }
}
