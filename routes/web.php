<?php
use App\Http\Controllers\AdminDashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\UpdatePekerjaan;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\PeminatanController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\LandingPage;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\Pencarian;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\KelolaUserController;
use App\Http\Controllers\KelolaVideoController;
use App\Http\Controllers\LowonganKerjaController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Auth; 
use  Illuminate\Support\Facades\Facade;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth','user-access:admin'])->group(function(){

      //--Dashboard--:
      Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin.dashboard');
      Route::get('/dashboard',[AdminDashboard::class,'dashboard']);
      //--end--

      //--Route Alumni--:
      Route::get('/alumni',[AlumniController::class,'alumni']);
      Route::get('/alumni/create',[AlumniController::class,'create']);
      Route::get('/alumni/{id}/edit',[AlumniController::class,'edit']);
      Route::get('/alumni/{id}/apv',[AlumniController::class,'approve']);
      Route::put('/alumni/{id}',[AlumniController::class,'update']);
      Route::delete('/alumni/{id}',[AlumniController::class,'destroy']);
      Route::post('/alumni',[AlumniController::class,'store']);
      //--end--

      //--Route prodi--:
      Route::get('/prodi',[ProdiController::class,'prodi']);
      Route::post('/prodi',[ProdiController::class,'store']);
      Route::get('/prodi/{id}/edit',[ProdiController::class,'edit']);
      Route::put('/prodi/{id}',[ProdiController::class,'update']);
      Route::delete('/prodi/{id}',[ProdiController::class,'destroy']);
      Route::get('/prodi/create',[ProdiController::class,'create']);
      //--end--

      //--Peminatan--:
      Route::get('/peminatan',[PeminatanController::class,'peminatan']);
      Route::get('/peminatan/create',[PeminatanController::class,'create']);
      Route::post('/peminatan',[PeminatanController::class,'store']);
      Route::get('/peminatan/{id}/edit',[PeminatanController::class,'edit']);
      Route::put('/peminatan/{id}',[PeminatanController::class,'update']);
      Route::delete('/peminatan/{id}',[PeminatanController::class,'destroy']);
      //--end--

      //--berita--:
      Route::get('/berita',[BeritaController::class,'berita']);
      Route::get('/berita/create',[BeritaController::class,'create']);
      Route::post('/berita',[BeritaController::class,'store']);
      Route::get('/berita/{id}/edit',[BeritaController::class,'edit']);
      Route::put('/berita/{id}',[BeritaController::class,'update']);
      Route::delete('/berita/{id}',[BeritaController::class,'destroy']);
      //--end--

      //--lowongan--:
      Route::get('/lowongan',[LowonganController::class,'lowongan']);
      Route::get('/lowongan/create',[LowonganController::class,'create']);
      Route::post('/lowongan',[LowonganController::class,'store']);
      Route::get('/lowongan/{id}/prev',[LowonganController::class,'preview']);
      Route::get('/lowongan/{id}/edit',[LowonganController::class,'edit']);
      Route::put('/lowongan/{id}',[LowonganController::class,'update']);
      Route::delete('/lowongan/{id}',[LowonganController::class,'destroy']);

      


      //--gallery--:
      Route::get('/gallery',[GalleryController::class,'gallery']);
      Route::get('/gallery/create',[GalleryController::class,'create']);
      Route::post('/gallery',[GalleryController::class,'store']);
      Route::get('/gallery/{id}/edit',[GalleryController::class,'edit']);
      Route::put('/gallery/{id}',[GalleryController::class,'update']);
      Route::delete('/gallery/{id}',[GalleryController::class,'destroy']);

      //--User--:
      Route::get('/main',[KelolaUserController::class,'kelola']);
      Route::delete('main/{id}',[KelolaUserController::class,'destroy']);

      //--Video--:
      Route::get('/video_control',[KelolaVideoController::class,'video']);
      Route::get('/video_control/create',[KelolaVideoController::class,'create']);
      Route::post('/video_control',[KelolaVideoController::class,'store']);
      Route::get('/video_control/{id}/edit',[KelolaVideoController::class,'edit']);
      Route::put('/video_control/{id}',[KelolaVideoController::class,'update']);
      Route::delete('/video_control/{id}',[KelolaVideoController::class,'destroy']);
});





Route::middleware(['auth','user-access:user'])->group(function(){

   //--user--:
   Route::get('/home', [App\Http\Controllers\HomeController::class, 'user'])->name('users.user_dashboard');
   //--Daftar--:
   Route::get('/daftar',[DaftarController::class,'daftar']);
   Route::post('/daftar',[DaftarController::class,'store']);

   //--lowongan--:
   Route::get('/lowongan_kerja',[LowonganKerjaController::class,'lowongan_kerja']);
   Route::post('/lowongan_kerja',[LowonganKerjaController::class,'store']);

   //--Kerja--:
   Route::get('/edit/{id}/data',[UpdatePekerjaan::class,'edit']);
   Route::put('/edit/{id}',[UpdatePekerjaan::class,'update']);
});


//--public:

Auth::routes();

Route::get('/tampil_kerja',[LowonganKerjaController::class,'tampil']);
Route::get('/',[LandingPage::class,'page']);
Route::get('/pencarian',[Pencarian::class,'pencarian']);
Route::get('/pencarian/data',[Pencarian::class,'cari']);
Route::get('/view/{id}/berita',[BeritaController::class,'tampil_berita']);
Route::get('/view_berita',[BeritaController::class,'old']);
Route::get('/pdf/{id}',[LowonganKerjaController::class,'pdf']);
Route::get('/view_gallery',[GalleryController::class,'view_gallery']);
Route::get('/video',[VideoController::class,'video']);



