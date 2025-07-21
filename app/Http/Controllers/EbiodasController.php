<?php

namespace App\Http\Controllers;

use App\Models\Ebiodas;
use Illuminate\Http\Request;

class EbiodasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filese = Ebiodas::latest()->paginate(10);
        return view('files.biologi-dasar', compact('filese'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('files.createE');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:docx,pdf,jpg,jpeg,png|max:2048'
        ]);

        $file = $request->file('file');
        $fileName = $file->hashName();
        $file->storeAs('uploads', $fileName);

        Ebiodas::create([
            'original_name' => $file->getClientOriginalName(),
            'generated_name' => $fileName
        ]);

        return redirect()
            ->route('files.biologi-dasar')
            ->with('success', 'File berhasil diupload');
    }
    
    public function download(Ebiodas $file)
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
    public function show(Ebiodas $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ebiodas $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ebiodas $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ebiodas $file)
    {
        //
    }
}
