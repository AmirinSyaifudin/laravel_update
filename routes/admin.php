<?php
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Admin\ProvinsiController;

Route::get('/', 'HomeController@index')->name('dashboard');

// DASHBOARD
Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');

//PROVINSI
// Route::resource('provinsi', ProvinsiController::class);

// Route::get('/provinsi/data', 'DataController@provinsi')->name('provinsi.data');
// Route::get('/provinsi/dataProvinsi', 'ProvinsiController@dataProvinsi')->name('provinsi.dataProvinsi');

Route::get('/provinsi', 'ProvinsiController@index')->name('provinsi.index');
Route::get('/provinsi/create', 'ProvinsiController@create')->name('provinsi.create');
// Route::get('/provinsi', 'provinsiController@data')->name('provinsi.data');
Route::post('/provinsi', 'ProvinsiController@store')->name('provinsi.store');
Route::get('/provinsi/{provinsi}/edit', 'ProvinsiController@edit')->name('provinsi.edit');
Route::put('/provinsi', 'ProvinsiController@update')->name('provinsi.update');
Route::delete('/provinsi', 'ProvinsiController@destroy')->name('provinsi.destroy');
Route::get('/provinsi/{provinsi}/detail', 'ProvinsiController@detail')->name('provinsi.detail');

//KOTA
// Route::get('/kota/data', 'DataController@kota')->name('kota.data');
// Route::get('/kota/dataKota', 'KotaController@dataKota')->name('kota.dataKota');

Route::get('/kota', 'KotaController@index')->name('kota.index');
Route::get('/kota/create', 'KotaController@create')->name('kota.create');
// Route::get('/kota', 'KotaController@data')->name('kota.data');
Route::post('/kota', 'KotaController@store')->name('kota.store');
Route::get('/kota/{kota}/edit', 'KotaController@edit')->name('kota.edit');
Route::put('/kota/{kota}', 'KotaController@update')->name('kota.update');
Route::delete('/kota/{kota}', 'KotaController@destroy')->name('kota.destroy');
// Route::get('/kota/{kota}/detail', 'KotaController@detail')->name('kota.detail');

//KABUPATEN
// Route::get('/kabupaten/data', 'DataController@kabupaten')->name('kabupaten.data');
// Route::get('/kabupaten/dataKabupaten', 'KabupatenController@dataKabupaten')->name('kabupaten.dataKabupaten');

//Route::get('/kabupaten/data', 'DataController@kabupaten')->name('kabupaten.data');
Route::get('/kabupaten', 'KabupatenController@index')->name('kabupaten.index');
Route::get('/kabupaten/create', 'KabupatenController@create')->name('kabupaten.create');
// Route::get('/kabupaten', 'KabupatenController@data')->name('kabupaten.data');
Route::post('/kabupaten', 'KabupatenController@store')->name('kabupaten.store');
Route::get('/kabupaten/{kabupaten}/edit', 'KabupatenController@edit')->name('kabupaten.edit');
Route::put('/kabupaten/{kabupaten}', 'KabupatenController@update')->name('kabupaten.update');
Route::delete('/kabupaten/{kabupaten}', 'KabupatenController@destroy')->name('kabupaten.destroy');
Route::get('/kabupaten/{kabupaten}/detail', 'KabupatenController@detail')->name('kabupaten.detail');

//karyawan
Route::get('/karyawan/data', 'DataController@karyawan')->name('karyawan.data');
// Route::post('/karyawandatatable', 'KaryawanController@GETdata')->name('karyawan.get');
Route::get('/karyawan', 'KaryawanController@index')->name('karyawan.index');
Route::get('/karyawan/create', 'KaryawanController@create')->name('karyawan.create');
Route::post('/karyawan', 'KaryawanController@store')->name('karyawan.store');
Route::get('/karyawan/{karyawan}/edit', 'KaryawanController@edit')->name('karyawan.edit');
// Route::get('/karyawan/edit/{$id}', 'karyawanController@edit')->name('karyawan.edit');
Route::put('/karyawan/{karyawan}', 'KaryawanController@update')->name('karyawan.update');
Route::delete('/karyawan/{karyawan}', 'KaryawanController@destroy')->name('karyawan.destroy');
Route::get('/karyawan/{karyawan}/detail', 'KaryawanController@detail')->name('karyawan.detail');

//cuti
Route::get('/cuti/data', 'DataController@cuti')->name('cuti.data');
Route::get('/cuti', 'CutiController@index')->name('cuti.index');
//Route::post('/cutidatatable', 'CutiController@GETdata')->name('cuti.get');

Route::get('/cuti', 'CutiController@index')->name('cuti.index');
Route::get('/cuti/create', 'CutiController@create')->name('cuti.create');
Route::post('/cuti', 'CutiController@store')->name('cuti.store');
Route::get('/cuti/{cuti}/edit', 'CutiController@edit')->name('cuti.edit');
// Route::get('/cuti/edit/{$id}', 'cutiController@edit')->name('cuti.edit');
Route::put('/cuti/{cuti}', 'CutiController@update')->name('cuti.update');
Route::delete('/cuti/{cuti}', 'CutiController@destroy')->name('cuti.destroy');
Route::get('/cuti/{cuti}/detail', 'CutiController@detail')->name('cuti.detail');

//PASIEN
Route::get('/pasien/data', 'DataController@pasien')->name('pasien.data');
Route::get('/pasien', 'PasienController@index')->name('pasien.index');
Route::get('/pasien/create', 'PasienController@create')->name('pasien.create');
// Route::get('/pasien', 'PasienController@data')->name('pasien.data');
Route::post('/pasien', 'PasienController@store')->name('pasien.store');
Route::get('/pasien/{pasien}/edit', 'PasienController@edit')->name('pasien.edit');
Route::put('/pasien/{pasien}', 'PasienController@update')->name('pasien.update');
Route::delete('/pasien/{pasien}', 'PasienController@destroy')->name('pasien.destroy');
Route::get('/pasien/{pasien}/detail', 'PasienController@detail')->name('pasien.detail');
// Route::resource('/pasien', 'PasienController');

//karyawan
Route::get('/tablekaryawan', 'TablekaryawanController@index')->name('tablekaryawan.index');
Route::get('/tablekaryawan/create', 'TablekaryawanController@create')->name('tablekaryawan.create');
Route::post('/tablekaryawan', 'TablekaryawanController@store')->name('tablekaryawan.store');
Route::get('/tablekaryawan/{tablekaryawan}/edit', 'TablekaryawanController@edit')->name('tablekaryawan.edit');
// Route::get('/tablekaryawan/edit/{$id}', 'tablekaryawanController@edit')->name('tablekaryawan.edit');
Route::put('/tablekaryawan/{tablekaryawan}', 'TablekaryawanController@update')->name('tablekaryawan.update');
Route::delete('/tablekaryawan/{tablekaryawan}', 'TablekaryawanController@destroy')->name('tablekaryawan.destroy');
Route::get('/tablekaryawan/{tablekaryawan}/detail', 'TablekaryawanController@detail')->name('tablekaryawan.detail');


//cuti
Route::get('/tablecuti', 'TablecutiController@index')->name('tablecuti.index');
Route::get('/tablecuti/create', 'TablecutiController@create')->name('tablecuti.create');
Route::post('/tablecuti', 'TablecutiController@store')->name('tablecuti.store');
Route::get('/tablecuti/{tablecuti}/edit', 'TablecutiController@edit')->name('tablecuti.edit');
// Route::get('/tablecuti/edit/{$id}', 'tablecutiController@edit')->name('tablecuti.edit');
Route::put('/tablecuti/{tablecuti}', 'TablecutiController@update')->name('tablecuti.update');
Route::delete('/tablecuti/{tablecuti}', 'TablecutiController@destroy')->name('tablecuti.destroy');
Route::get('/tablecuti/{tablecuti}/detail', 'TablecutiController@detail')->name('tablecuti.detail');


Route::get('laporan/tigakrw', 'LaporanController@tigakrw')->name('laporan.tigakrw');
Route::get('laporan/cutikrw', 'LaporanController@cutikrw')->name('laporan.cutikrw');
Route::get('laporan/cutilebihkrw', 'LaporanController@cutilebihkrw')->name('laporan.cutilebihkrw');
Route::get('laporan/sisacuti', 'LaporanController@sisacuti')->name('laporan.sisacuti');
Route::get('laporan/pengajuancuti', 'LaporanController@pengajuancuti')->name('laporan.pengajuancuti');

// soal 1 
Route::get('/ganjilgenap', 'GanjilgenapController@index')->name('ganjilgenap.index');
Route::get('/ganjilgenap/create', 'GanjilgenapController@create')->name('ganjilgenap.create');
Route::post('/ganjilgenap', 'GanjilgenapController@store')->name('ganjilgenap.store');
Route::get('/ganjilgenap/{ganjilgenap}/edit', 'GanjilgenapController@edit')->name('ganjilgenap.edit');
Route::put('/ganjilgenap/{ganjilgenap}', 'GanjilgenapController@update')->name('ganjilgenap.update');
Route::delete('/ganjilgenap/{ganjilgenap}', 'GanjilgenapController@destroy')->name('ganjilgenap.destroy');
// Route::get('/ganjilgenap/{ganjilgenap}/detail', 'GanjilgenapController@detail')->name('ganjilgenap.detail');

//parkir 
//Route::get('/parkir', 'ParkirController@index')->name('parkir.index');
Route::get('/parkir', 'ParkirController@index')->name('parkir.index');
Route::get('/parkir/create', 'ParkirController@create')->name('parkir.create');
Route::post('/parkir', 'ParkirController@store')->name('parkir.store');
Route::get('/parkir/{parkir}/edit', 'ParkirController@edit')->name('parkir.edit');
Route::put('/parkir/{parkir}', 'ParkirController@update')->name('parkir.update');
Route::delete('/parkir/{parkir}', 'ParkirController@destroy')->name('parkir.destroy');
Route::get('/parkir/{parkir}/checkout', 'ParkirController@checkout')->name('parkir.checkout');


//bis 
Route::get('/bis', 'BisController@index')->name('bis.index');
Route::get('/bis/create', 'BisController@create')->name('bis.create');
Route::post('/bis', 'BisController@store')->name('bis.store');
Route::get('/bis/{bis}/edit', 'BisController@edit')->name('bis.edit');
Route::put('/bis/{bis}', 'BisController@update')->name('bis.update');
Route::delete('/bis/{bis}', 'BisController@destroy')->name('bis.destroy');
Route::get('/bis/{bis}/detail', 'BisController@detail')->name('bis.detail');
// Route::resource('/bis', 'BisController');

//terbilang
Route::get('/terbilang', 'TerbilangController@index')->name('terbilang.index');
Route::get('/terbilang/create', 'TerbilangController@create')->name('terbilang.create');
Route::post('/terbilang', 'TerbilangController@store')->name('terbilang.store');
Route::get('/terbilang/{terbilang}/edit', 'TerbilangController@edit')->name('terbilang.edit');
Route::put('/terbilang/{terbilang}', 'TerbilangController@update')->name('terbilang.update');
Route::delete('/terbilang/{terbilang}', 'TerbilangController@destroy')->name('terbilang.destroy');
Route::get('/terbilang/{terbilang}/detail', 'TerbilangController@detail')->name('terbilang.detail');

//jarak waktu
Route::get('/jarakwaktu', 'JarakwaktuController@index')->name('jarakwaktu.index');
Route::get('/jarakwaktu/create', 'JarakwaktuController@create')->name('jarakwaktu.create');
Route::post('/jarakwaktu', 'JarakwaktuController@store')->name('jarakwaktu.store');
Route::get('/jarakwaktu/{jarakwaktu}/edit', 'JarakwaktuController@edit')->name('jarakwaktu.edit');
Route::put('/jarakwaktu/{jarakwaktu}', 'JarakwaktuController@update')->name('jarakwaktu.update');
Route::delete('/jarakwaktu/{jarakwaktu}', 'JarakwaktuController@destroy')->name('jarakwaktu.destroy');
Route::get('/jarakwaktu/{jarakwaktu}/detail', 'JarakwaktuController@detail')->name('jarakwaktu.detail');
Route::get('/jarakwaktu/{jarakwaktu}/detail', 'JarakwaktuController@detail')->name('jarakwaktu.detail');


// Route::resource('/jarakwaktu', 'JarakwaktuController');

// Penjumlahan
Route::get('/penjumlahan', 'PenjumlahanController@index')->name('penjumlahan.index');
Route::get('/penjumlahan/create', 'PenjumlahanController@create')->name('penjumlahan.create');
Route::post('/penjumlahan', 'PenjumlahanController@store')->name('penjumlahan.store');
Route::get('/penjumlahan/{penjumlahan}/edit', 'PenjumlahanController@edit')->name('penjumlahan.edit');
// Route::get('/penjumlahan/edit/{$id}', 'PenjumlahanController@edit')->name('penjumlahan.edit');
Route::put('/penjumlahan/{penjumlahan}', 'PenjumlahanController@update')->name('penjumlahan.update');
Route::delete('/penjumlahan/{penjumlahan}', 'PenjumlahanController@destroy')->name('penjumlahan.destroy');
Route::get('/penjumlahan/{penjumlahan}/detail', 'PenjumlahanController@detail')->name('penjumlahan.detail');

// pengurangan 
Route::get('/pengurangan', 'PenguranganController@index')->name('pengurangan.index');
Route::get('/pengurangan/create', 'PenguranganController@create')->name('pengurangan.create');
Route::post('/pengurangan', 'PenguranganController@store')->name('pengurangan.store');
Route::get('/pengurangan/{pengurangan}/edit', 'PenguranganController@edit')->name('pengurangan.edit');
// Route::get('/pengurangan/edit/{$id}', 'PenguranganController@edit')->name('pengurangan.edit');
Route::put('/pengurangan/{pengurangan}', 'PenguranganController@update')->name('pengurangan.update');
Route::delete('/pengurangan/{pengurangan}', 'PenguranganController@destroy')->name('pengurangan.destroy');
Route::get('/pengurangan/{pengurangan}/detail', 'PenguranganController@detail')->name('pengurangan.detail');

//perkalian
Route::get('/perkalian', 'PerkalianController@index')->name('perkalian.index');
Route::get('/perkalian/create', 'PerkalianController@create')->name('perkalian.create');
Route::post('/perkalian', 'PerkalianController@store')->name('perkalian.store');
Route::get('/perkalian/{perkalian}/edit', 'PerkalianController@edit')->name('perkalian.edit');
// Route::get('/perkalian/edit/{$id}', 'PerkalianController@edit')->name('perkalian.edit');
Route::put('/perkalian/{perkalian}', 'PerkalianController@update')->name('perkalian.update');
Route::delete('/perkalian/{perkalian}', 'PerkalianController@destroy')->name('perkalian.destroy');
Route::get('/perkalian/{perkalian}/detail', 'PerkalianController@detail')->name('perkalian.detail');

//Pembagian
Route::get('/pembagian', 'PembagianController@index')->name('pembagian.index');
Route::get('/pembagian/create', 'PembagianController@create')->name('pembagian.create');
Route::post('/pembagian', 'PembagianController@store')->name('pembagian.store');
Route::get('/pembagian/{pembagian}/edit', 'PembagianController@edit')->name('pembagian.edit');
// Route::get('/pembagian/edit/{$id}', 'PembagianController@edit')->name('pembagian.edit');
Route::put('/pembagian/{pembagian}', 'PembagianController@update')->name('pembagian.update');
Route::delete('/pembagian/{pembagian}', 'PembagianController@destroy')->name('pembagian.destroy');
Route::get('/pembagian/{pembagian}/detail', 'PembagianController@detail')->name('pembagian.detail');

//JENIS PASIEN 
Route::get('/jenispasien', 'JenispasienController@index')->name('jenispasien.index');
Route::get('/jenispasien/create', 'JenispasienController@create')->name('jenispasien.create');
Route::post('/jenispasien', 'JenispasienController@store')->name('jenispasien.store');
Route::get('/jenispasien/{jenispasien}/edit', 'JenispasienController@edit')->name('jenispasien.edit');
Route::put('/jenispasien/{jenispasien}', 'JenispasienController@update')->name('jenispasien.update');
Route::delete('/jenispasien/{jenispasien}', 'JenispasienController@destroy')->name('jenispasien.destroy');
Route::get('/jenispasien/{jenispasien}/detail', 'JenispasienController@detail')->name('jenispasien.detail');
// Route::resource('/jenispasien', 'jenispasienController');

//POLIKLINIK
Route::get('/poliklinik', 'PoliklinikController@index')->name('poliklinik.index');
Route::get('/poliklinik/create', 'PoliklinikController@create')->name('poliklinik.create');
Route::post('/poliklinik', 'PoliklinikController@store')->name('poliklinik.store');
Route::get('/poliklinik/{poliklinik}/edit', 'PoliklinikController@edit')->name('poliklinik.edit');
Route::put('/poliklinik/{poliklinik}', 'PoliklinikController@update')->name('poliklinik.update');
Route::delete('/poliklinik/{poliklinik}', 'PoliklinikController@destroy')->name('poliklinik.destroy');
Route::get('/poliklinik/{poliklinik}/detail', 'PoliklinikController@detail')->name('poliklinik.detail');
// Route::resource('/poliklinik', 'PoliklinikController');

//GOLONGAN DARAH
Route::get('/golongandarah', 'GolongandarahController@index')->name('golongandarah.index');
Route::get('/golongandarah/create', 'GolongandarahController@create')->name('golongandarah.create');
Route::post('/golongandarah', 'GolongandarahController@store')->name('golongandarah.store');
Route::get('/golongandarah/{golongandarah}/edit', 'GolongandarahController@edit')->name('golongandarah.edit');
Route::put('/golongandarah/{golongandarah}', 'GolongandarahController@update')->name('golongandarah.update');
Route::delete('/golongandarah/{golongandarah}', 'GolongandarahController@destroy')->name('golongandarah.destroy');
Route::get('/golongandarah/{golongandarah}/detail', 'GolongandarahController@detail')->name('golongandarah.detail');
// Route::resource('/golongandarah', 'GolongandarahController');

//STATUS PERKAWINAN 
Route::get('/statusperkawinan', 'StatusperkawinanController@index')->name('statusperkawinan.index');
Route::get('/statusperkawinan/create', 'StatusperkawinanController@create')->name('statusperkawinan.create');
Route::post('/statusperkawinan', 'StatusperkawinanController@store')->name('statusperkawinan.store');
Route::get('/statusperkawinan/{statusperkawinan}/edit', 'StatusperkawinanController@edit')->name('statusperkawinan.edit');
Route::put('/statusperkawinan/{statusperkawinan}', 'StatusperkawinanController@update')->name('statusperkawinan.update');
Route::delete('/statusperkawinan/{statusperkawinan}', 'StatusperkawinanController@destroy')->name('statusperkawinan.destroy');
Route::get('/statusperkawinan/{statusperkawinan}/detail', 'StatusperkawinanController@detail')->name('statusperkawinan.detail');
// Route::resource('/statusperkawinan', 'StatusperkawinanController');

//PENDIDIKAN
Route::get('/pendidikan', 'PendidikanController@index')->name('pendidikan.index');
Route::get('/pendidikan/create', 'PendidikanController@create')->name('pendidikan.create');
Route::post('/pendidikan', 'PendidikanController@store')->name('pendidikan.store');
Route::get('/pendidikan/{pendidikan}/edit', 'PendidikanController@edit')->name('pendidikan.edit');
Route::put('/pendidikan/{pendidikan}', 'PendidikanController@update')->name('pendidikan.update');
Route::delete('/pendidikan/{pendidikan}', 'PendidikanController@destroy')->name('pendidikan.destroy');
Route::get('/pendidikan/{pendidikan}/detail', 'PendidikanController@detail')->name('pendidikan.detail');
// Route::resource('/pendidikan', 'PendidikanController');

//PEKERJAAN 
Route::get('/pekerjaan', 'PekerjaanController@index')->name('pekerjaan.index');
Route::get('/pekerjaan/create', 'PekerjaanController@create')->name('pekerjaan.create');
Route::post('/pekerjaan', 'PekerjaanController@store')->name('pekerjaan.store');
Route::get('/pekerjaan/{pekerjaan}/edit', 'PekerjaanController@edit')->name('pekerjaan.edit');
Route::put('/pekerjaan/{pekerjaan}', 'PekerjaanController@update')->name('pekerjaan.update');
Route::delete('/pekerjaan/{pekerjaan}', 'PekerjaanController@destroy')->name('pekerjaan.destroy');
Route::get('/pekerjaan/{pekerjaan}/detail', 'PekerjaanController@detail')->name('pekerjaan.detail');
// Route::resource('/pekerjaan', 'PekerjaanController');

//AGAMA
Route::get('/agama', 'AgamaController@index')->name('agama.index');
Route::get('/agama/create', 'AgamaController@create')->name('agama.create');
Route::post('/agama', 'AgamaController@store')->name('agama.store');
Route::get('/agama/{agama}/edit', 'AgamaController@edit')->name('agama.edit');
Route::put('/agama/{agama}', 'AgamaController@update')->name('agama.update');
Route::delete('/agama/{agama}', 'AgamaController@destroy')->name('agama.destroy');
Route::get('/agama/{agama}/detail', 'AgamaController@detail')->name('agama.detail');
// Route::resource('/agama', 'AgamaController');

//SUKU
Route::get('/suku', 'SukuController@index')->name('suku.index');
Route::get('/suku/create', 'SukuController@create')->name('suku.create');
Route::post('/suku', 'SukuController@store')->name('suku.store');
Route::get('/suku/{suku}/edit', 'SukuController@edit')->name('suku.edit');
Route::put('/suku/{suku}', 'SukuController@update')->name('suku.update');
Route::delete('/suku/{suku}', 'SukuController@destroy')->name('suku.destroy');
Route::get('/suku/{suku}/detail', 'SukuController@detail')->name('suku.detail');
// Route::resource('/suku', 'SukuController');

//hitungKeliling
Route::get('/hitungkeliling', 'HitungkelilingController@index')->name('hitungkeliling.index');
Route::get('/hitungkeliling/create', 'HitungkelilingController@create')->name('hitungkeliling.create');
Route::post('/hitungkeliling', 'HitungkelilingController@store')->name('hitungkeliling.store');
Route::get('/hitungkeliling/{hitungkeliling}/edit', 'HitungkelilingController@edit')->name('hitungkeliling.edit');
// Route::get('/hitungkeliling/edit/{$id}', 'HitungkelilingController@edit')->name('hitungkeliling.edit');
Route::put('/hitungkeliling/{hitungkeliling}', 'HitungkelilingController@update')->name('hitungkeliling.update');
Route::delete('/hitungkeliling/{hitungkeliling}', 'HitungkelilingController@destroy')->name('hitungkeliling.destroy');
Route::get('/hitungkeliling/{hitungkeliling}/detail', 'HitungkelilingController@detail')->name('hitungkeliling.detail');

//HitungLuas
Route::get('/hitungluas', 'HitungluasController@index')->name('hitungluas.index');
Route::get('/hitungluas/create', 'HitungluasController@create')->name('hitungluas.create');
Route::post('/hitungluas', 'HitungluasController@store')->name('hitungluas.store');
Route::get('/hitungluas/{hitungluas}/edit', 'HitungluasController@edit')->name('hitungluas.edit');
// Route::get('/hitungluas/edit/{$id}', 'HitungluasController@edit')->name('hitungluas.edit');
Route::put('/hitungluas/{hitungluas}', 'HitungluasController@update')->name('hitungluas.update');
Route::delete('/hitungluas/{hitungluas}', 'HitungluasController@destroy')->name('hitungluas.destroy');
Route::get('/hitungluas/{hitungluas}/detail', 'HitungluasController@detail')->name('hitungluas.detail');

//Jquery
Route::get('/jqform', 'JqformController@index')->name('jqform.index');
//Route::get('/terbilang/{terbilang}/edit', 'TerbilangController@edit')->name('terbilang.edit');
//Route::delete('/terbilang/{terbilang}', 'TerbilangController@destroy')->name('terbilang.destroy');
//Route::get('/terbilang/{terbilang}/detail', 'TerbilangController@detail')->name('terbilang.detail');


//bis 
Route::get('/tahunkabisat', 'TahunkabisatController@index')->name('tahunkabisat.index');
Route::get('/tahunkabisat/create', 'TahunkabisatController@create')->name('tahunkabisat.create');
Route::post('/tahunkabisat', 'TahunkabisatController@store')->name('tahunkabisat.store');
Route::get('/tahunkabisat/{tahunkabisat}/edit', 'TahunkabisatController@edit')->name('tahunkabisat.edit');
Route::put('/tahunkabisat/{tahunkabisat}', 'TahunkabisatController@update')->name('tahunkabisat.update');
Route::delete('/tahunkabisat/{tahunkabisat}', 'TahunkabisatController@destroy')->name('tahunkabisat.destroy');
Route::get('/tahunkabisat/{tahunkabisat}/detail', 'TahunkabisatController@detail')->name('tahunkabisat.detail');
// Route::resource('/tahunkabisat', 'tahunkabisatController');

//bis 
Route::get('/jamkerja', 'JamkerjaController@index')->name('jamkerja.index');
Route::get('/jamkerja/create', 'JamkerjaController@create')->name('jamkerja.create');
Route::post('/jamkerja', 'JamkerjaController@store')->name('jamkerja.store');
Route::get('/jamkerja/{jamkerja}/edit', 'JamkerjaController@edit')->name('jamkerja.edit');
Route::put('/jamkerja/{jamkerja}', 'JamkerjaController@update')->name('jamkerja.update');
Route::delete('/jamkerja/{jamkerja}', 'JamkerjaController@destroy')->name('jamkerja.destroy');
Route::get('/jamkerja/{jamkerja}/detail', 'JamkerjaController@detail')->name('jamkerja.detail');
// Route::resource('/jamkerja', 'JamkerjaController');

//bis 
Route::get('/usia', 'UsiaController@index')->name('usia.index');
Route::get('/usia/create', 'UsiaController@create')->name('usia.create');
Route::post('/usia', 'UsiaController@store')->name('usia.store');
Route::get('/usia/{usia}/edit', 'UsiaController@edit')->name('usia.edit');
Route::put('/usia/{usia}', 'UsiaController@update')->name('usia.update');
Route::delete('/usia/{usia}', 'UsiaController@destroy')->name('usia.destroy');
Route::get('/usia/{usia}/detail', 'UsiaController@detail')->name('usia.detail');
// Route::resource('/usia', 'UsiaController');

//bis 
Route::get('/hitungbb', 'HitungbbController@index')->name('hitungbb.index');
Route::get('/hitungbb/create', 'HitungbbController@create')->name('hitungbb.create');
Route::post('/hitungbb', 'HitungbbController@store')->name('hitungbb.store');
Route::get('/hitungbb/{hitungbb}/edit', 'HitungbbController@edit')->name('hitungbb.edit');
Route::put('/hitungbb/{hitungbb}', 'HitungbbController@update')->name('hitungbb.update');
Route::delete('/hitungbb/{hitungbb}', 'HitungbbController@destroy')->name('hitungbb.destroy');
Route::get('/hitungbb/{hitungbb}/detail', 'HitungbbController@detail')->name('hitungbb.detail');
// Route::resource('/hitungbb', 'HitungbbController');

//bis 
Route::get('/goljamkerja', 'GoljamkerjaController@index')->name('goljamkerja.index');
Route::get('/goljamkerja/create', 'GoljamkerjaController@create')->name('goljamkerja.create');
Route::post('/goljamkerja', 'GoljamkerjaController@store')->name('goljamkerja.store');
Route::get('/goljamkerja/{goljamkerja}/edit', 'GoljamkerjaController@edit')->name('goljamkerja.edit');
Route::put('/goljamkerja/{goljamkerja}', 'GoljamkerjaController@update')->name('goljamkerja.update');
Route::delete('/goljamkerja/{goljamkerja}', 'GoljamkerjaController@destroy')->name('goljamkerja.destroy');
Route::get('/goljamkerja/{goljamkerja}/detail', 'GoljamkerjaController@detail')->name('goljamkerja.detail');
// Route::resource('/goljamkerja', 'GoljamkerjaController');

//bis 
Route::get('/hari', 'HariController@index')->name('hari.index');
Route::get('/hari/create', 'HariController@create')->name('hari.create');
Route::post('/hari', 'HariController@store')->name('hari.store');
Route::get('/hari/{hari}/edit', 'HariController@edit')->name('hari.edit');
Route::put('/hari/{hari}', 'HariController@update')->name('hari.update');
Route::delete('/hari/{hari}', 'HariController@destroy')->name('hari.destroy');
Route::get('/hari/{hari}/detail', 'HariController@detail')->name('hari.detail');
// Route::resource('/hari', 'HariController');

//bis 
Route::get('/zodiak', 'ZodiakController@index')->name('zodiak.index');
Route::get('/zodiak/create', 'ZodiakController@create')->name('zodiak.create');
Route::post('/zodiak', 'ZodiakController@store')->name('zodiak.store');
Route::get('/zodiak/{zodiak}/edit', 'ZodiakController@edit')->name('zodiak.edit');
Route::put('/zodiak/{zodiak}', 'ZodiakController@update')->name('zodiak.update');
Route::delete('/zodiak/{zodiak}', 'ZodiakController@destroy')->name('zodiak.destroy');
Route::get('/zodiak/{zodiak}/detail', 'ZodiakController@detail')->name('zodiak.detail');
// Route::resource('/zodiak', 'ZodiakController');

//bis 
Route::get('/nilaimhs', 'NilaimhsController@index')->name('nilaimhs.index');
Route::get('/nilaimhs/create', 'NilaimhsController@create')->name('nilaimhs.create');
Route::post('/nilaimhs', 'NilaimhsController@store')->name('nilaimhs.store');
Route::get('/nilaimhs/{nilaimhs}/edit', 'NilaimhsController@edit')->name('nilaimhs.edit');
Route::put('/nilaimhs/{nilaimhs}', 'NilaimhsController@update')->name('nilaimhs.update');
Route::delete('/nilaimhs/{nilaimhs}', 'NilaimhsController@destroy')->name('nilaimhs.destroy');
Route::get('/nilaimhs/{nilaimhs}/detail', 'NilaimhsController@detail')->name('nilaimhs.detail');
// Route::resource('/nilaimhs', 'NilaimhsController');

//bis 
Route::get('/nilailulus', 'NilailulusController@index')->name('nilailulus.index');
Route::get('/nilailulus/create', 'NilailulusController@create')->name('nilailulus.create');
Route::post('/nilailulus', 'NilailulusController@store')->name('nilailulus.store');
Route::get('/nilailulus/{nilailulus}/edit', 'NilailulusController@edit')->name('nilailulus.edit');
Route::put('/nilailulus/{nilailulus}', 'NilailulusController@update')->name('nilailulus.update');
Route::delete('/nilailulus/{nilailulus}', 'NilailulusController@destroy')->name('nilailulus.destroy');
Route::get('/nilailulus/{nilailulus}/detail', 'NilailulusController@detail')->name('nilailulus.detail');
// Route::resource('/nilailulus', 'NilailulusController');

//bis 
Route::get('/hitungparkir', 'HitungparkirController@index')->name('hitungparkir.index');
Route::get('/hitungparkir/create', 'HitungparkirController@create')->name('hitungparkir.create');
Route::post('/hitungparkir', 'HitungparkirController@store')->name('hitungparkir.store');
Route::get('/hitungparkir/{hitungparkir}/edit', 'HitungparkirController@edit')->name('hitungparkir.edit');
Route::put('/hitungparkir/{hitungparkir}', 'HitungparkirController@update')->name('hitungparkir.update');
Route::delete('/hitungparkir/{hitungparkir}', 'HitungparkirController@destroy')->name('hitungparkir.destroy');
Route::get('/hitungparkir/{hitungparkir}/detail', 'HitungparkirController@detail')->name('hitungparkir.detail');
// Route::resource('/hitungparkir', 'HitungparkirController');


//bis 
Route::get('/jamswitch', 'JamswitchController@index')->name('jamswitch.index');
Route::get('/jamswitch/create', 'JamswitchController@create')->name('jamswitch.create');
Route::post('/jamswitch', 'JamswitchController@store')->name('jamswitch.store');
Route::get('/jamswitch/{jamswitch}/edit', 'JamswitchController@edit')->name('jamswitch.edit');
Route::put('/jamswitch/{jamswitch}', 'JamswitchController@update')->name('jamswitch.update');
Route::delete('/jamswitch/{jamswitch}', 'JamswitchController@destroy')->name('jamswitch.destroy');
Route::get('/jamswitch/{jamswitch}/detail', 'JamswitchController@detail')->name('jamswitch.detail');
// Route::resource('/jamswitch', 'JamswitchController');