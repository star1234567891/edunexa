<?php

namespace App\Http\Controllers;

use App\Models\Filetermo;
use Illuminate\Http\Request;

class FiletermoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Filter file berdasarkan dua mata kuliah yang berbeda
        $files['ppt'] = Filetermo::where('mata_kuliah', 'ppt')->latest()->paginate(10);
        $files['ebook'] = Filetermo::where('mata_kuliah', 'ebook')->latest()->paginate(10);
        $files['soal'] = Filetermo::where('mata_kuliah', 'soal')->latest()->paginate(10);    
        return view('files.termodinamika', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('files.createtermo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storetermo(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:docx,pdf,jpg,jpeg,png|max:2048',
            'mata_kuliah' => 'required|string|max:255'
        ]);
    
        $file = $request->file('file');
        $fileName = $file->hashName();
        $file->storeAs('uploads', $fileName);
    
        Filetermo::create([
            'original_name' => $file->getClientOriginalName(),
            'generated_name' => $fileName,
            'mata_kuliah' => $request->mata_kuliah
        ]);
    
        return redirect()
            ->route('files.termodinamika')
            ->with('success', 'File berhasil diupload');
    }
    
    public function downloadtermo(Filetermo $file)
    {
        $filePath = storage_path("app/uploads/{$file->generated_name}");

        if (file_exists($filePath)) {
            return response()->download($filePath, $file->original_name);
        } else {
            abort(404, 'File not found');
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(Filetermo $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Filetermo $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Filetermo $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Filetermo $file)
    {
        //
    }
}