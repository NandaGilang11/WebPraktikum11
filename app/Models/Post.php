<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Properti yang dapat diisi (fillable) pada model.
     * Properti ini menentukan kolom-kolom yang dapat diisi dalam tabel "posts".
     */
    protected $fillable = [
        'judul', // Judul dari post
        'kategori', // Kategori dari post
        'konten', // Konten dari post
        'penulis', // Penulis dari post
    ];
}
