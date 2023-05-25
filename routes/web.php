<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Beranda"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "Tentang Kami",
        "name" => "Kelompok 13",
        "campus" => "Institut Teknologi Sumatera",
        "image" => "nafis.jpeg" 
    ]);
});


Route::get('/blog', function () {
    return view('posts', [
        "title" => "Informasi"
    ]);
});

Route::get('/lampung_barat/kebun_raya_liwa', function () {
    return view('lampung_barat/kebun_raya_liwa', [
        "title" => "Informasi"
    ]);
});

Route::get('/lampung_barat/bukit_kabut_bawang_bakung', function () {
    return view('lampung_barat/bukit_kabut_bawang_bakung', [
        "title" => "Informasi"
    ]);
});

Route::get('/lampung_barat/gunung_seminung', function () {
    return view('lampung_barat/gunung_seminung', [
        "title" => "Informasi"
    ]);
});

Route::get('/lampung_barat/danau_suoh', function () {
    return view('lampung_barat/danau_suoh', [
        "title" => "Informasi"
    ]);
});

Route::get('/lampung_barat/gunung_pesagi', function () {
    return view('lampung_barat/gunung_pesagi', [
        "title" => "Informasi"
    ]);
});

Route::get('/lampung_selatan/air_terjun_way_kalam', function () {
    return view('/lampung_selatan/air_terjun_way_kalam', [
        "title" => "Informasi"
    ]);
});

Route::get('/lampung_selatan/menara_siger', function () {
    return view('/lampung_selatan/menara_siger', [
        "title" => "Informasi"
    ]);
});

Route::get('/lampung_selatan/pantai_marina', function () {
    return view('/lampung_selatan/pantai_marina', [
        "title" => "Informasi"
    ]);
});

Route::get('/lampung_selatan/pulau_mengkudu', function () {
    return view('/lampung_selatan/pulau_mengkudu', [
        "title" => "Informasi"
    ]);
});

Route::get('/lampung_selatan/pulau_sebesi', function () {
    return view('/lampung_selatan/pulau_sebesi', [
        "title" => "Informasi"
    ]);
});

Route::get('/lampung', function () {
    return view('/lampung_selatan/pulau_sebesi', [
        "title" => "Informasi"
    ]);
});

Route::get('/lampung_tengah/danau_telogo_rejo_sendang_baru', function () {
    return view('/lampung_tengah/danau_telogo_rejo_sendang_baru', [
        "title" => "Informasi"
    ]);
});

Route::get('/lampung_tengah/danau_tirta_gangga', function () {
    return view('/lampung_tengah/danau_tirta_gangga', [
        "title" => "Informasi"
    ]);
});

Route::get('/lampung_tengah/kolam_renang_telaga_putri', function () {
    return view('/lampung_tengah/kolam_renang_telaga_putri', [
        "title" => "Informasi"
    ]);
});

Route::get('/lampung_tengah/masjid_istiqlal_bandar_jaya', function () {
    return view('/lampung_tengah/masjid_istiqlal_bandar_jaya', [
        "title" => "Informasi"
    ]);
});

Route::get('/lampung_tengah/tugu_pepadun', function () {
    return view('/lampung_tengah/tugu_pepadun', [
        "title" => "Informasi"
    ]);
});

Route::get('/lampung_timur/danau_kemuning', function () {
    return view('/lampung_timur/danau_kemuning', [
        "title" => "Informasi"
    ]);
});

Route::get('/lampung_timur/danau_way_jepara', function () {
    return view('/lampung_timur/danau_way_jepara', [
        "title" => "Informasi"
    ]);
});

Route::get('/lampung_timur/pantai_cemara_indah', function () {
    return view('/lampung_timur/pantai_cemara_indah', [
        "title" => "Informasi"
    ]);
});

Route::get('/lampung_timur/taman_nasional_way_kambas', function () {
    return view('/lampung_timur/taman_nasional_way_kambas', [
        "title" => "Informasi"
    ]);
});

Route::get('/lampung_timur/taman_purbakala_pugungraharjo', function () {
    return view('/lampung_timur/taman_purbakala_pugungraharjo', [
        "title" => "Informasi"
    ]);
});

Route::get('/lampung_utara/agrowisata_lembah_bambu_kuning', function () {
    return view('/lampung_utara/agrowisata_lembah_bambu_kuning', [
        "title" => "Informasi"
    ]);
});

Route::get('/lampung_utara/air_terjun_beringin', function () {
    return view('/lampung_utara/air_terjun_beringin', [
        "title" => "Informasi"
    ]);
});

Route::get('/lampung_utara/taman_wisata_way_rarem', function () {
    return view('/lampung_utara/taman_wisata_way_rarem', [
        "title" => "Informasi"
    ]);
});

Route::get('/lampung_utara/taman_wisata_way_tebabeng', function () {
    return view('/lampung_utara/taman_wisata_way_tebabeng', [
        "title" => "Informasi"
    ]);
});

Route::get('/lampung_utara/tugu_payan_mas_kotabumi', function () {
    return view('/lampung_utara/tugu_payan_mas_kotabumi', [
        "title" => "Informasi"
    ]);
});

Route::get('/mesuji/alun-alun_simpang_pematang', function () {
    return view('/mesuji/alun-alun_simpang_pematang', [
        "title" => "Informasi"
    ]);
});

Route::get('/mesuji/masjid_agung_simpang_pematang', function () {
    return view('/mesuji/masjid_agung_simpang_pematang', [
        "title" => "Informasi"
    ]);
});

Route::get('/mesuji/sungai_mesuji', function () {
    return view('/mesuji/sungai_mesuji', [
        "title" => "Informasi"
    ]);
});

Route::get('/mesuji/wisata_asik_wiralaga', function () {
    return view('/mesuji/wisata_asik_wiralaga', [
        "title" => "Informasi"
    ]);
});

Route::get('/pesawaran/air_terjun_ciupang', function () {
    return view('/pesawaran/air_terjun_ciupang', [
        "title" => "Informasi"
    ]);
});

Route::get('/pesawaran/air_terjun_sinar_tiga', function () {
    return view('/pesawaran/air_terjun_sinar_tiga', [
        "title" => "Informasi"
    ]);
});

Route::get('/pesawaran/hutan_mangrove_petengoran', function () {
    return view('/pesawaran/hutan_mangrove_petengoran', [
        "title" => "Informasi"
    ]);
});

Route::get('/pesawaran/pantai_klara', function () {
    return view('/pesawaran/pantai_klara', [
        "title" => "Informasi"
    ]);
});

Route::get('/pesawaran/pulau_kelagian', function () {
    return view('/pesawaran/pulau_kelagian', [
        "title" => "Informasi"
    ]);
});

Route::get('/pesisir_barat/labuhan_jukung', function () {
    return view('/pesisir_barat/labuhan_jukung', [
        "title" => "Informasi"
    ]);
});

Route::get('/pesisir_barat/pantai_tanjung_setia_krui', function () {
    return view('/pesisir_barat/pantai_tanjung_setia_krui', [
        "title" => "Informasi"
    ]);
});

Route::get('/pesisir_barat/pantai_tembakak_krui', function () {
    return view('/pesisir_barat/pantai_tembakak_krui', [
        "title" => "Informasi"
    ]);
});

Route::get('/pesisir_barat/pulau_pisang', function () {
    return view('/pesisir_barat/pulau_pisang', [
        "title" => "Informasi"
    ]);
});

Route::get('/pesisir_barat/taman_nasional_bukit_barisan_selatan', function () {
    return view('/pesisir_barat/taman_nasional_bukit_barisan_selatan', [
        "title" => "Informasi"
    ]);
});

Route::get('/pringsewu/bukit_puncak_pangonan', function () {
    return view('/pringsewu/bukit_puncak_pangonan', [
        "title" => "Informasi"
    ]);
});

Route::get('/pringsewu/rumah_kalkun_mitra_alam', function () {
    return view('/pringsewu/rumah_kalkun_mitra_alam', [
        "title" => "Informasi"
    ]);
});

Route::get('/pringsewu/talang_indah_pajaresuk', function () {
    return view('/pringsewu/talang_indah_pajaresuk', [
        "title" => "Informasi"
    ]);
});

Route::get('/pringsewu/taman_wisata_bmj', function () {
    return view('/pringsewu/taman_wisata_bmj', [
        "title" => "Informasi"
    ]);
});

Route::get('/pringsewu/wahana_berkuda_watu_sewu', function () {
    return view('/pringsewu/wahana_berkuda_watu_sewu', [
        "title" => "Informasi"
    ]);
});

Route::get('/tanggamus/air_terjun_batu_lapis', function () {
    return view('/tanggamus/air_terjun_batu_lapis', [
        "title" => "Informasi"
    ]);
});

Route::get('/tanggamus/air_terjun_lembah_pelangi', function () {
    return view('/tanggamus/air_terjun_lembah_pelangi', [
        "title" => "Informasi"
    ]);
});

Route::get('/tanggamus/gunung_tanggamus', function () {
    return view('/tanggamus/gunung_tanggamus', [
        "title" => "Informasi"
    ]);
});

Route::get('/tanggamus/pantai_karang_bebai', function () {
    return view('/tanggamus/pantai_karang_bebai', [
        "title" => "Informasi"
    ]);
});

Route::get('/tanggamus/sharks_teeth_beach', function () {
    return view('/tanggamus/sharks_teeth_beach', [
        "title" => "Informasi"
    ]);
});

Route::get('/tulang_bawang/islamic_center_tulang_bawang_barat', function () {
    return view('/tulang_bawang/islamic_center_tulang_bawang_barat', [
        "title" => "Informasi"
    ]);
});

Route::get('/tulang_bawang/kawasan_wisata_cakat_raya', function () {
    return view('/tulang_bawang/kawasan_wisata_cakat_raya', [
        "title" => "Informasi"
    ]);
});

Route::get('/tulang_bawang/kolam_renang_taman_bahagia', function () {
    return view('/tulang_bawang/kolam_renang_taman_bahagia', [
        "title" => "Informasi"
    ]);
});

Route::get('/tulang_bawang/sungai_tulang_bawang', function () {
    return view('/tulang_bawang/sungai_tulang_bawang', [
        "title" => "Informasi"
    ]);
});

Route::get('/tulang_bawang/tugu_empat_marga', function () {
    return view('/tulang_bawang/tugu_empat_marga', [
        "title" => "Informasi"
    ]);
});

Route::get('/bandar_lampung/bukit_aslan', function () {
    return view('/bandar_lampung/bukit_aslan', [
        "title" => "Informasi"
    ]);
});

Route::get('/bandar_lampung/lampung_walk', function () {
    return view('/bandar_lampung/lampung_walk', [
        "title" => "Informasi"
    ]);
});

Route::get('/bandar_lampung/masjid_al_furqon', function () {
    return view('/bandar_lampung/masjid_al_furqon', [
        "title" => "Informasi"
    ]);
});

Route::get('/bandar_lampung/trans_studio_mini_lampung', function () {
    return view('/bandar_lampung/trans_studio_mini_lampung', [
        "title" => "Informasi"
    ]);
});

Route::get('/bandar_lampung/wira_garden', function () {
    return view('/bandar_lampung/wira_garden', [
        "title" => "Informasi"
    ]);
});