@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/m2.jpg" class="rounded" alt="Alun-alun Simpang Pematang" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Alun-alun Simpang Pematang</h1>
      <h2>Alamat : Simpang Pematang, Kec. Simpang Pematang, Kabupaten Mesuji, Lampung 34698</h2>
      <p>
        Taman Alun Alun Simpang Pematang yang terletak di kabupaten mesuji, kecamatan 
        Simpang Pematang, Desa Simpang Pematang, yang berada di lapangan Simpang Pematang. 
        Taman Alun Alun Simpang Pematang dikenal sebagai tempat kunjungan para anak 
        muda dan Taman Alun Alun Simpang Pematang paling ramai dikunjungi pada 
        saat malam minggu dan disore hari minggu sehingga banyak pedagang 
        yang berjalan di Taman Alun Alun Simpang Pematang.
      </p>
      <a href="/" class="btn btn-info" role="button">Kembali Ke Beranda</a>
    </div>
  </div>
</div>

<style>
  .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>

@endsection