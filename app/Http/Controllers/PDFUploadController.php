<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use Illuminate\Support\Facades\Storage;

class PDFUploadController extends Controller
{
    public function uploadPDF(Request $request)
    {
        // Validasi file PDF
        $request->validate([
            'pdf' => 'required|mimes:pdf|max:2048', // Maksimal 2MB
        ]);

        // Simpan file PDF di storage/public/pdf
        $path = $request->file('pdf')->store('public/pdf');

        // Simpan path file ke database
        $model = new Document();
        $model->pdf_path = $path;
        $model->save();

        return redirect()->back()->with('success', 'PDF berhasil diupload dan disimpan.');
    }
}
