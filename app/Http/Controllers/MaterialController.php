<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;

class MaterialController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel materials
        $materials = Material::all();

        // Kirim data ke view
        return view('materials.index', compact('materials'));
    }
}
