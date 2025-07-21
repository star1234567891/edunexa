<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filefismat2 extends Model
{
    use HasFactory;

    protected $fillable = [
        'original_name',
        'generated_name',
        'mata_kuliah'
    ];
}
