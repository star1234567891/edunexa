<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $table = 'documents'; // Nama tabel di database
    protected $fillable = ['title', 'pdf_path']; // Kolom yang bisa diisi
}
