<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\PDFUploadController;
use App\Http\Controllers\DocumentController;


Route::get('/', function () {
    return view('depan');
});

Route::post('/redirect', function (\Illuminate\Http\Request $request) {
    $university = $request->input('university');
    $program = $request->input('program');

    // Buat slug dari input untuk mengarahkan ke halaman yang sesuai
    $slug = strtolower(str_replace(' ', '-', $university)) . '-' . strtolower(str_replace(' ', '-', $program));

    return redirect()->route('files.view', ['slug' => $slug]);
})->name('redirect');

Route::get('/files/{slug}', function ($slug) {
    // Cek apakah ada view yang sesuai dengan slug
    if (view()->exists('files.' . $slug)) {
        return view('files.' . $slug);
    } else {
        abort(404, 'Page not found');
    }
})->name('files.view');

Route::get('/materials', [MaterialController::class, 'index'])->name('materials.index');
Route::get('/download/{id}', [MaterialController::class, 'download'])->name('materials.download');

Route::post('/upload-pdf', [PDFUploadController::class, 'uploadPDF'])->name('upload.pdf');

Route::get('/fisika', [DocumentController::class, 'fisika'])->name('pdfPath');

Route::get('/documents', [DocumentController::class, 'index'])->name('documents.index');
Route::get('/documents/{id}', [DocumentController::class, 'show'])->name('documents.show');

Route::get('/kalkulus/files', [App\Http\Controllers\FilekalController::class, 'index'])
    ->name('files.kalkulus');

Route::get('/kalkulus/files/create', [App\Http\Controllers\FilekalController::class, 'create'])
    ->name('files.createkal');

Route::post('/kalkulus/files/store', [App\Http\Controllers\FilekalController::class, 'storekal'])
    ->name('files.storekal');

Route::get('/kalkulus/files/{file}/download', [App\Http\Controllers\FilekalController::class, 'downloadkal'])
    ->name('files.downloadkal');

// Rute untuk Biologi Dasar
Route::get('/biologi-dasar/files', [App\Http\Controllers\FilebdController::class, 'index'])
    ->name('files.biologi-dasar');

Route::get('/biologi-dasar/files/create', [App\Http\Controllers\FilebdController::class, 'create'])
    ->name('files.createbd');

Route::post('/biologi-dasar/files/store', [App\Http\Controllers\FilebdController::class, 'storebd'])
    ->name('files.storebd');

Route::get('/biologi-dasar/files/{file}/download', [App\Http\Controllers\FilebdController::class, 'downloadbd'])
    ->name('files.downloadbd');

Route::get('/fisika-dasar/files', [App\Http\Controllers\FilefdController::class, 'index'])
    ->name('files.fisika-dasar');

Route::get('/fisika-dasar/files/create', [App\Http\Controllers\FilefdController::class, 'create'])
    ->name('files.createfd');

Route::post('/fisika-dasar/files/store', [App\Http\Controllers\FilefdController::class, 'storefd'])
    ->name('files.storefd');

Route::get('/fisika-dasar/files/{file}/download', [App\Http\Controllers\FilefdController::class, 'downloadfd'])
    ->name('files.downloadfd');

Route::get('/kimia-dasar/files', [App\Http\Controllers\FilekdController::class, 'index'])
    ->name('files.kimia-dasar');

Route::get('/kimia-dasar/files/create', [App\Http\Controllers\FilekdController::class, 'create'])
    ->name('files.createkd');

Route::post('/kimia-dasar/files/store', [App\Http\Controllers\FilekdController::class, 'storekd'])
    ->name('files.storekd');

Route::get('/kimia-dasar/files/{file}/download', [App\Http\Controllers\FilekdController::class, 'downloadkd'])
    ->name('files.downloadkd');

Route::get('/fisika-dasar-praktikum/files', [App\Http\Controllers\FilefdpController::class, 'index'])
    ->name('files.fisika-dasar-praktikum');

Route::get('/fisika-dasar-praktikum/files/create', [App\Http\Controllers\FilefdpController::class, 'create'])
    ->name('files.createfdp');

Route::post('/fisika-dasar-praktikum/files/store', [App\Http\Controllers\FilefdpController::class, 'storefdp'])
    ->name('files.storefdp');

Route::get('/fisika-dasar-praktikum/files/{file}/download', [App\Http\Controllers\FilefdpController::class, 'downloadfdp'])
    ->name('files.downloadfdp');

Route::get('/fisika-matematika/files', [App\Http\Controllers\FilefismatController::class, 'index'])
    ->name('files.fisika-matematika');

Route::get('/fisika-matematika/files/create', [App\Http\Controllers\FilefismatController::class, 'create'])
    ->name('files.createfismat');

Route::post('/fisika-matematika/files/store', [App\Http\Controllers\FilefismatController::class, 'storefismat'])
    ->name('files.storefismat');

Route::get('/fisika-matematika/files/{file}/download', [App\Http\Controllers\FilefismatController::class, 'downloadfismat'])
    ->name('files.downloadfismat');

Route::get('/fisika-dasarII/files', [App\Http\Controllers\Filefd2Controller::class, 'index'])
    ->name('files.fisika-dasarII');

Route::get('/fisika-dasarII/files/create', [App\Http\Controllers\Filefd2Controller::class, 'create'])
    ->name('files.createfd2');

Route::post('/fisika-dasarII/files/store', [App\Http\Controllers\Filefd2Controller::class, 'storefd2'])
    ->name('files.storefd2');

Route::get('/fisika-dasarII/files/{file}/download', [App\Http\Controllers\Filefd2Controller::class, 'downloadfd2'])
    ->name('files.downloadfd2');

Route::get('/fisika-dasarII-praktikum/files', [App\Http\Controllers\FilefdpIIController::class, 'index'])
    ->name('files.fisika-dasarII-praktikum');

Route::get('/fisika-dasarII-praktikum/files/create', [App\Http\Controllers\FilefdpIIController::class, 'create'])
    ->name('files.createfdpII');

Route::post('/fisika-dasarII-praktikum/files/store', [App\Http\Controllers\FilefdpIIController::class, 'storefdpII'])
    ->name('files.storefdpII');

Route::get('/fisika-dasarII-praktikum/files/{file}/download', [App\Http\Controllers\FilefdpIIController::class, 'downloadfdpII'])
    ->name('files.downloadfdpII');

Route::get('/termodinamika/files', [App\Http\Controllers\FiletermoController::class, 'index'])
    ->name('files.termodinamika');

Route::get('/termodinamika/files/create', [App\Http\Controllers\FiletermoController::class, 'create'])
    ->name('files.createtermo');

Route::post('/termodinamika/files/store', [App\Http\Controllers\FiletermoController::class, 'storetermo'])
    ->name('files.storetermo');

Route::get('/termodinamika/files/{file}/download', [App\Http\Controllers\FiletermoController::class, 'downloadtermo'])
    ->name('files.downloadtermo');

Route::get('/elektronika1/files', [App\Http\Controllers\FileelkaController::class, 'index'])
    ->name('files.elektronika1');

Route::get('/elektronika1/files/create', [App\Http\Controllers\FileelkaController::class, 'create'])
    ->name('files.createelka');

Route::post('/elektronika1/files/store', [App\Http\Controllers\FileelkaController::class, 'storeelka'])
    ->name('files.storeelka');

Route::get('/elektronika1/files/{file}/download', [App\Http\Controllers\FileelkaController::class, 'downloadelka'])
    ->name('files.downloadelka');

Route::get('/elektronika1-praktikum/files', [App\Http\Controllers\Fileelkaprak1Controller::class, 'index'])
    ->name('files.elektronika1-praktikum');

Route::get('/elektronika1-praktikum/files/create', [App\Http\Controllers\Fileelkaprak1Controller::class, 'create'])
    ->name('files.createelkaprak1');

Route::post('/elektronika1-praktikum/files/store', [App\Http\Controllers\Fileelkaprak1Controller::class, 'storeelkaprak1'])
    ->name('files.storeelkaprak1');

Route::get('/elektronika1-praktikum/files/{file}/download', [App\Http\Controllers\Fileelkaprak1Controller::class, 'downloadelkaprak1'])
    ->name('files.downloadelkaprak1');

Route::get('/biofisika/files', [App\Http\Controllers\FilebiofisController::class, 'index'])
    ->name('files.biofisika');

Route::get('/biofisika/files/create', [App\Http\Controllers\FilebiofisController::class, 'create'])
    ->name('files.createbiofis');

Route::post('/biofisika/files/store', [App\Http\Controllers\FilebiofisController::class, 'storebiofis'])
    ->name('files.storebiofis');

Route::get('/biofisika/files/{file}/download', [App\Http\Controllers\FilebiofisController::class, 'downloadbiofis'])
    ->name('files.downloadbiofis');

Route::get('/fisika-gelombang/files', [App\Http\Controllers\FilefisgelController::class, 'index'])
    ->name('files.fisika-gelombang');

Route::get('/fisika-gelombang/files/create', [App\Http\Controllers\FilefisgelController::class, 'create'])
    ->name('files.createfisgel');

Route::post('/fisika-gelombang/files/store', [App\Http\Controllers\FilefisgelController::class, 'storefisgel'])
    ->name('files.storefisgel');

Route::get('/fisika-gelombang/files/{file}/download', [App\Http\Controllers\FilefisgelController::class, 'downloadfisgel'])
    ->name('files.downloadfisgel');

Route::get('/fisika-modern/files', [App\Http\Controllers\FilefismodController::class, 'index'])
    ->name('files.fisika-modern');

Route::get('/fisika-modern/files/create', [App\Http\Controllers\FilefismodController::class, 'create'])
    ->name('files.createfismod');

Route::post('/fisika-modern/files/store', [App\Http\Controllers\FilefismodController::class, 'storefismod'])
    ->name('files.storefismod');

Route::get('/fisika-modern/files/{file}/download', [App\Http\Controllers\FilefismodController::class, 'downloadfismod'])
    ->name('files.downloadfismod');

Route::get('/fisika-matematikaII/files', [App\Http\Controllers\Filefismat2Controller::class, 'index'])
    ->name('files.fisika-matematikaII');

Route::get('/fisika-matematikaII/files/create', [App\Http\Controllers\Filefismat2Controller::class, 'create'])
    ->name('files.createfismat2');

Route::post('/fisika-matematikaII/files/store', [App\Http\Controllers\Filefismat2Controller::class, 'storefismat2'])
    ->name('files.storefismat2');

Route::get('/fisika-matematikaII/files/{file}/download', [App\Http\Controllers\Filefismat2Controller::class, 'downloadfismat2'])
    ->name('files.downloadfismat2');

Route::get('/mekanika/files', [App\Http\Controllers\FilemekanikaController::class, 'index'])
    ->name('files.mekanika');

Route::get('/mekanika/files/create', [App\Http\Controllers\FilemekanikaController::class, 'create'])
    ->name('files.createmekanika');

Route::post('/mekanika/files/store', [App\Http\Controllers\FilemekanikaController::class, 'storemekanika'])
    ->name('files.storemekanika');

Route::get('/mekanika/files/{file}/download', [App\Http\Controllers\FilemekanikaController::class, 'downloadmekanika'])
    ->name('files.downloadmekanika');

Route::get('/mekanika-praktikum/files', [App\Http\Controllers\FilemekprakController::class, 'index'])
    ->name('files.mekanika-praktikum');

Route::get('/mekanika-praktikum/files/create', [App\Http\Controllers\FilemekprakController::class, 'create'])
    ->name('files.createmekprak');

Route::post('/mekanika-praktikum/files/store', [App\Http\Controllers\FilemekprakController::class, 'storemekprak'])
    ->name('files.storemekprak');

Route::get('/mekanika-praktikum/files/{file}/download', [App\Http\Controllers\FilemekprakController::class, 'downloadmekprak'])
    ->name('files.downloadmekprak');

Route::get('/eksperimental1/files', [App\Http\Controllers\Fileeksper1Controller::class, 'index'])
    ->name('files.eksperimental1');

Route::get('/eksperimental1/files/create', [App\Http\Controllers\Fileeksper1Controller::class, 'create'])
    ->name('files.createeksper1');

Route::post('/eksperimental1/files/store', [App\Http\Controllers\Fileeksper1Controller::class, 'storeeksper1'])
    ->name('files.storeeksper1');

Route::get('/eksperimental1/files/{file}/download', [App\Http\Controllers\Fileeksper1Controller::class, 'downloadeksper1'])
    ->name('files.downloadeksper1');

Route::get('/elektronika2/files', [App\Http\Controllers\Fileelka2Controller::class, 'index'])
    ->name('files.elektronika2');

Route::get('/elektronika2/files/create', [App\Http\Controllers\Fileelka2Controller::class, 'create'])
    ->name('files.createelka2');

Route::post('/elektronika2/files/store', [App\Http\Controllers\Fileelka2Controller::class, 'storeelka22'])
    ->name('files.storeelka2');

Route::get('/elektronika2/files/{file}/download', [App\Http\Controllers\Fileelka2Controller::class, 'downloadelka2'])
    ->name('files.downloadelka2');

Route::get('/elektronika2-praktikum/files', [App\Http\Controllers\Fileelkaprak2Controller::class, 'index'])
    ->name('files.elektronika2-praktikum');

Route::get('/elektronika2-praktikum/files/create', [App\Http\Controllers\Fileelkaprak2Controller::class, 'create'])
    ->name('files.createelkaprak2');

Route::post('/elektronika2-praktikum/files/store', [App\Http\Controllers\Fileelkaprak2Controller::class, 'storeelkaprak2'])
    ->name('files.storeelkaprak2');

Route::get('/elektronika2-praktikum/files/{file}/download', [App\Http\Controllers\Fileelkaprak2Controller::class, 'downloadelkaprak2'])
    ->name('files.downloadelkaprak2');

Route::get('/fisika-matematika3/files', [App\Http\Controllers\Filefismat3Controller::class, 'index'])
    ->name('files.fisika-matematika3');

Route::get('/fisika-matematika3/files/create', [App\Http\Controllers\Filefismat3Controller::class, 'create'])
    ->name('files.createfismat3');

Route::post('/fisika-matematika3/files/store', [App\Http\Controllers\Filefismat3Controller::class, 'storefismat3'])
    ->name('files.storefismat3');

Route::get('/fisika-matematika3/files/{file}/download', [App\Http\Controllers\Filefismat3Controller::class, 'downloadfismat3'])
    ->name('files.downloadfismat3');

Route::get('/fisika-komputasi1/files', [App\Http\Controllers\Filefiskom1Controller::class, 'index'])
    ->name('files.fisika-komputasi1');

Route::get('/fisika-komputasi1/files/create', [App\Http\Controllers\Filefiskom1Controller::class, 'create'])
    ->name('files.createfiskom1');

Route::post('/fisika-komputasi1/files/store', [App\Http\Controllers\Filefiskom1Controller::class, 'storefiskom1'])
    ->name('files.storefiskom1');

Route::get('/fisika-komputasi1/files/{file}/download', [App\Http\Controllers\Filefiskom1Controller::class, 'downloadfiskom1'])
    ->name('files.downloadfiskom1');

Route::get('/fisika-komputasi1-praktikum/files', [App\Http\Controllers\Filefiskomprak1Controller::class, 'index'])
    ->name('files.fisika-komputasi1-praktikum');

Route::get('/fisika-komputasi1-praktikum/files/create', [App\Http\Controllers\Filefiskomprak1Controller::class, 'create'])
    ->name('files.createfiskomprak1');

Route::post('/fisika-komputasi1-praktikum/files/store', [App\Http\Controllers\Filefiskomprak1Controller::class, 'storefiskomprak1'])
    ->name('files.storefiskomprak1');

Route::get('/fisika-komputasi1-praktikum/files/{file}/download', [App\Http\Controllers\Filefiskomprak1Controller::class, 'downloadfiskomprak1'])
    ->name('files.downloadfiskomprak1');

Route::get('/fisika-kuantum/files', [App\Http\Controllers\FilekuantumController::class, 'index'])
    ->name('files.fisika-kuantum');

Route::get('/fisika-kuantum/files/create', [App\Http\Controllers\FilekuantumController::class, 'create'])
    ->name('files.createkuantum');

Route::post('/fisika-kuantum/files/store', [App\Http\Controllers\FilekuantumController::class, 'storekuantum'])
    ->name('files.storekuantum');

Route::get('/fisika-kuantum/files/{file}/download', [App\Http\Controllers\FilekuantumController::class, 'downloadkuantum'])
    ->name('files.downloadkuantum');