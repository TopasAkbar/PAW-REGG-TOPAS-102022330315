<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MahasiswaController;
// TODO: Import controller MahasiswaController


// TODO: Buat route untuk menangani request
/*    - Rute-rute terkait CRUD mahasiswa:
 *        - GET     `/mahasiswa`      → `MahasiswaController method:index`
 *        - POST    `/mahasiswa`      → `MahasiswaController method:store`
 *        - GET     `/mahasiswa/{id}` → `MahasiswaController method:show`
 *        - PUT     `/mahasiswa/{id}` → `MahasiswaController method:update`
 *        - DELETE  `/mahasiswa/{id}` → `MahasiswaController method:destroy`
 */
Route::apiResource('mahasiswa', MahasiswaController::class);
Route::get('/', [MahasiswaController::class, 'index']); // GET ALL
Route::get('/{id}', [MahasiswaController::class, 'show']); // GET DETAIL
Route::post('/', [MahasiswaController::class, 'store']); // POST
Route::put('/{id}', [MahasiswaController::class, 'update']); // PUT
Route::delete('/{id}', [MahasiswaController::class, 'destroy']); // DELETE