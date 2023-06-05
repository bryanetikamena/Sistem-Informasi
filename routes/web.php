<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardKaryawanController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardBobotKriteriaController;
use App\Http\Controllers\DashboardKriteriaTanggungJawabController;
use App\Http\Controllers\DashboardKriteriaDisiplinController;
use App\Http\Controllers\DashboardKriteriaLoyalitasController;
use App\Http\Controllers\DashboardKriteriaKeahlianController;
use App\Http\Controllers\DashboardKriteriaKerjaSamaController;
use App\Http\Controllers\DashboardKriteriaPengetahuanController;
use App\Http\Controllers\DashboardPenilaianController;
use App\Http\Controllers\DashboardPeringkatController;
use App\Http\Controllers\KaryawanController;


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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Bryan Etikamena",
        "email" => "ifanetikamena@gmail.com",
        "image" => "komputer.jpg"
    ]);
});

Route::get('login/index', function () {
    return view('login');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');//->middleware('guest');
//Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');


//Route::get('/login', [LoginController::class, 'index']);
//Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

//Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard', function(){
    return view('dashboard.index');
});

Route::resource('/dashboard/users',DashboardPostController::class);
//Route::get('/dashboard/users', [DashboardPostController::class, 'edit']);
Route::resource('/dashboard/karyawans',DashboardKaryawanController::class);
Route::resource('/dashboard/admins',DashboardAdminController::class);
Route::resource('/dashboard/bobot_kriterias',DashboardBobotKriteriaController::class);
Route::resource('/dashboard/kriteria_tanggung_jawabs',DashboardKriteriaTanggungJawabController::class);
Route::resource('/dashboard/kriteria_disiplins',DashboardKriteriaDisiplinController::class);
Route::resource('/dashboard/kriteria_loyalitas',DashboardKriteriaLoyalitasController::class);
Route::resource('/dashboard/kriteria_keahlians',DashboardKriteriaKeahlianController::class);
Route::resource('/dashboard/kriteria_kerja_samas',DashboardKriteriaKerjaSamaController::class);
Route::resource('/dashboard/kriteria_pengetahuans',DashboardKriteriaPengetahuanController::class);
Route::resource('/dashboard/penilaians',DashboardPenilaianController::class);
Route::resource('/dashboard/peringkats',DashboardPeringkatController::class);
//Route::resource('/dashboard/karyawans',KaryawanController::class);

Route::get('/deleteuser/{id}',[DashboardPostController::class, 'deleteuser'])->name('deleteuser');
Route::get('/showuser/{id}',[DashboardPostController::class, 'showuser'])->name('showuser');
Route::post('/edituser/{id}',[DashboardPostController::class, 'edituser'])->name('edituser');
Route::post('/updateuser/{id}',[DashboardPostController::class, 'updateuser'])->name('updateuser');

Route::get('/deleteadmin/{id}',[DashboardAdminController::class, 'deleteadmin'])->name('deleteadmin');
Route::get('/showadmin/{id}',[DashboardAdminController::class, 'showadmin'])->name('showadmin');
Route::post('/editadmin/{id}',[DashboardAdminController::class, 'editadmin'])->name('editadmin');
Route::post('/updateadmin/{id}',[DashboardAdminController::class, 'updateadmin'])->name('updateadmin');

Route::get('/deletekaryawan/{id}',[DashboardKaryawanController::class, 'deletekaryawan'])->name('deletekaryawan');
Route::get('/showkaryawan/{id}',[DashboardKaryawanController::class, 'showkaryawan'])->name('showkaryawan');
Route::post('/editkaryawan/{id}',[DashboardKaryawanController::class, 'editkaryawan'])->name('editkaryawan');
Route::post('/updatekaryawan/{id}',[DashboardKaryawanController::class, 'updatekaryawan'])->name('updatekaryawan');

Route::get('/deletebobotkriteria/{id}',[DashboardBobotKriteriaController::class, 'deletebobotkriteria'])->name('deletebobotkriteria');
Route::get('/showbobotkriteria/{id}',[DashboardBobotKriteriaController::class, 'showbobotkriteria'])->name('showbobotkriteria');
Route::post('/editbobotkriteria/{id}',[DashboardBobotKriteriaController::class, 'editbobotkriteria'])->name('editbobotkriteria');
Route::post('/updatebobotkriteria/{id}',[DashboardBobotKriteriaController::class, 'updatebobotkriteria'])->name('updatebobotkriteria');

Route::get('/deletekriteriatanggungjawab/{id}',[DashboardKriteriaTanggungJawabController::class, 'deletekriteriatanggungjawab'])->name('deletekriteriatanggungjawab');
Route::get('/showkriteriatanggungjawab/{id}',[DashboardKriteriaTanggungJawabController::class, 'showkriteriatanggungjawab'])->name('showkriteriatanggungjawab');
Route::post('/editkriteriatanggungjawab/{id}',[DashboardKriteriaTanggungJawabController::class, 'editkriteriatanggungjawab'])->name('editkriteriatanggungjawab');
Route::post('/updatekriteriatanggungjawab/{id}',[DashboardKriteriaTanggungJawabController::class, 'updatekriteriatanggungjawab'])->name('updatekriteriatanggungjawab');

Route::get('/deletekriteriadisiplin/{id}',[DashboardKriteriaDisiplinController::class, 'deletekriteriadisiplin'])->name('deletekriteriadisiplin');
Route::get('/showkriteriadisiplin/{id}',[DashboardKriteriaDisiplinController::class, 'showkriteriadisiplin'])->name('showkriteriadisiplin');
Route::post('/editkriteriadisiplin/{id}',[DashboardKriteriaDisiplinController::class, 'editkriteriadisiplin'])->name('editkriteriadisiplin');
Route::post('/updatekriteriadisiplin/{id}',[DashboardKriteriaDisiplinController::class, 'updatekriteriadisiplin'])->name('updatekriteriadisiplin');

Route::get('/deletekriterialoyalitas/{id}',[DashboardKriteriaLoyalitasController::class, 'deletekriterialoyalitas'])->name('deletekriterialoyalitas');
Route::get('/showkriterialoyalitas/{id}',[DashboardKriteriaLoyalitasController::class, 'showkriterialoyalitas'])->name('showkriterialoyalitas');
Route::post('/editkriterialoyalitas/{id}',[DashboardKriteriaLoyalitasController::class, 'editkriterialoyalitas'])->name('editkriterialoyalitas');
Route::post('/updatekriterialoyalitas/{id}',[DashboardKriteriaLoyalitasController::class, 'updatekriterialoyalitas'])->name('updatekriterialoyalitas');

Route::get('/deletekriteriakeahlian/{id}',[DashboardKriteriaKeahlianController::class, 'deletekriteriakeahlian'])->name('deletekriteriakeahlian');
Route::get('/showkriteriakeahlian/{id}',[DashboardKriteriaKeahlianController::class, 'showkriteriakeahlian'])->name('showkriteriakeahlian');
Route::post('/editkriteriakeahlian/{id}',[DashboardKriteriaKeahlianController::class, 'editkriteriakeahlian'])->name('editkriteriakeahlian');
Route::post('/updatekriteriakeahlian/{id}',[DashboardKriteriaKeahlianController::class, 'updatekriteriakeahlian'])->name('updatekriteriakeahlian');

Route::get('/deletekriteriakerjasama/{id}',[DashboardKriteriaKerjaSamaController::class, 'deletekriteriakerjasama'])->name('deletekriteriakerjasama');
Route::get('/showkriteriakerjasama/{id}',[DashboardKriteriaKerjaSamaController::class, 'showkriteriakerjasama'])->name('showkriteriakerjasama');
Route::post('/editkriteriakerjasama/{id}',[DashboardKriteriaKerjaSamaController::class, 'editkriteriakerjasama'])->name('editkriteriakerjasama');
Route::post('/updatekriteriakerjasama/{id}',[DashboardKriteriaKerjaSamaController::class, 'updatekriteriakerjasama'])->name('updatekriteriakerjasama');

Route::get('/deletekriteriapengetahuan/{id}',[DashboardKriteriaPengetahuanController::class, 'deletekriteriapengetahuan'])->name('deletekriteriapengetahuan');
Route::get('/showkriteriapengetahuan/{id}',[DashboardKriteriaPengetahuanController::class, 'showkriteriapengetahuan'])->name('showkriteriapengetahuan');
Route::post('/editkriteriapengetahuan/{id}',[DashboardKriteriaPengetahuanController::class, 'editkriteriapengetahuan'])->name('editkriteriapengetahuan');
Route::post('/updatekriteriapengetahuan/{id}',[DashboardKriteriaPengetahuanController::class, 'updatekriteriapengetahuan'])->name('updatekriteriapengetahuan');

Route::get('/deletepenilaian/{id}',[DashboardPenilaianController::class, 'deletepenilaian'])->name('deletepenilaian');
Route::get('/showpenilaian/{id}',[DashboardPenilaianController::class, 'showpenilaian'])->name('showpenilaian');
Route::post('/editpenilaian /{id}',[DashboardPenilaianController::class, 'editpenilaian '])->name('editpenilaian ');
Route::post('/updatepenilaian/{id}',[DashboardPenilaianController::class, 'updatepenilaian'])->name('updatepenilaian');

Route::get('/deleteperingkat/{id}',[DashboardPeringkatController::class, 'deleteperingkat'])->name('deleteperingkat');
Route::get('/showperingkat/{id}',[DashboardPeringkatController::class, 'showperingkat'])->name('showperingkat');
Route::post('/editperingkat/{id}',[DashboardPeringkatController::class, 'editperingkat'])->name('editperingkat');
Route::post('/updateperingkat/{id}',[DashboardPeringkatController::class, 'updateperingkat'])->name('updateperingkat');

//export pdf
Route::get('/exportuser',[DashboardPostController::class, 'exportuser'])->name('exportuser');
Route::get('/exportadmin',[DashboardAdminController::class, 'exportadmin'])->name('exportadmin');
Route::get('/exportkaryawan',[DashboardKaryawanController::class, 'exportkaryawan'])->name('exportkaryawan');
Route::get('/exportbobotkriteria',[DashboardBobotKriteriaController::class, 'exportbobotkriteria'])->name('exportbobotkriteria');
Route::get('/exportkriteriatanggungjawab',[DashboardKriteriaTanggungJawabController::class, 'exportkriteriatanggungjawab'])->name('exportkriteriatanggungjawab');
Route::get('/exportkriteriadisiplin',[DashboardKriteriaDisiplinController::class, 'exportkriteriadisiplin'])->name('exportkriteriadisiplin');
Route::get('/exportkriterialoyalitas',[DashboardKriteriaLoyalitasController::class, 'exportkriterialoyalitas'])->name('exportkriterialoyalitas');
Route::get('/exportkriteriakeahlian',[DashboardKriteriaKeahlianController::class, 'exportkriteriakeahlian'])->name('exportkriteriakeahlian');
Route::get('/exportkriteriakerjasama',[DashboardKriteriaKerjaSamaController::class, 'exportkriteriakerjasama'])->name('exportkriteriakerjasama');
Route::get('/exportkriteriapengetahuan',[DashboardKriteriaPengetahuanController::class, 'exportkriteriapengetahuan'])->name('exportkriteriapengetahuan');
Route::get('/exportpenilaian',[DashboardPenilaianController::class, 'exportpenilaian'])->name('exportpenilaian');
Route::get('/exportperingkat',[DashboardPeringkatController::class, 'exportperingkat'])->name('exportperingkat');

