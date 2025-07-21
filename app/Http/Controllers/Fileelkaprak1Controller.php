<?php

namespace App\Http\Controllers;

use App\Models\Fileeelkaprak1;
use Illuminate\Http\Request;

class Fileelkaprak1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Filter file berdasarkan dua mata kuliah yang berbeda
        $files['21'] = Fileeelkaprak1::where('mata_kuliah', '21')->latest()->paginate(10);
        $files['22'] = Fileeelkaprak1::where('mata_kuliah', '22')->latest()->paginate(10);
        $files['23'] = Fileeelkaprak1::where('mata_kuliah', '23')->latest()->paginate(10);    
        return view('files.elektronika1-praktikum', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('files.createelkaprak1');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeelkaprak1(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:docx,pdf,jpg,jpeg,png|max:10048',
            'mata_kuliah' => 'required|string|max:255'
        ]);
    
        $file = $request->file('file');
        $fileName = $file->hashName();
        $file->storeAs('uploads', $fileName);
    
        Fileeelkaprak1::create([
            'original_name' => $file->getClientOriginalName(),
            'generated_name' => $fileName,
            'mata_kuliah' => $request->mata_kuliah
        ]);
    
        return redirect()
            ->route('files.elektronika1-praktikum')
            ->with('success', 'File berhasil diupload');
    }
    
    public function downloadelkaprak1(Fileeelkaprak1 $file)
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
    public function show(Fileeelkaprak1 $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fileeelkaprak1 $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fileeelkaprak1 $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fileeelkaprak1 $file)
    {
        //
    }
}