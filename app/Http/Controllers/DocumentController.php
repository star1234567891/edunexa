<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function show($id)
    {
        // Temukan dokumen berdasarkan ID
        $document = Document::findOrFail($id);

        // Kirim ke view untuk menampilkan PDF
        $pdfPath = $document->pdf_path;
        return view('files.fisika', compact('pdfPath'));
    }
}
