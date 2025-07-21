<?php

namespace App\Http\Controllers;

use App\Models\Filemekprak;
use Illuminate\Http\Request;

class FilemekprakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Filter file berdasarkan dua mata kuliah yang berbeda
        $files['21'] = Filemekprak::where('mata_kuliah', '21')->latest()->paginate(10);
        $files['22'] = Filemekprak::where('mata_kuliah', '22')->latest()->paginate(10);
        $files['23'] = Filemekprak::where('mata_kuliah', '23')->latest()->paginate(10);    
        return view('files.mekanika-praktikum', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('files.createmekprak');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storemekprak(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:docx,pdf,jpg,jpeg,png|max:2048',
            'mata_kuliah' => 'required|string|max:255'
        ]);
    
        $file = $request->file('file');
        $fileName = $file->hashName();
        $file->storeAs('uploads', $fileName);
    
        Filemekprak::create([
            'original_name' => $file->getClientOriginalName(),
            'generated_name' => $fileName,
            'mata_kuliah' => $request->mata_kuliah
        ]);
    
        return redirect()
            ->route('files.mekanika-praktikum')
            ->with('success', 'File berhasil diupload');
    }
    
    public function downloadmekprak(Filemekprak $file)
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
    public function show(Filemekprak $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Filemekprak $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Filemekprak $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Filemekprak $file)
    {
        //
    }
}