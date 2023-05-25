@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/lti1.jpg" class="rounded" alt="Taman Nasional Way Kambas" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Taman Nasional Way Kambas</h1>
      <h2>Alamat : Raja Basa Lama, Labuhan Ratu, East Lampung Regency, Lampung 34375</h2>
      <p>
        Taman Nasional Way Kambas (TNWK) adalah taman nasional perlindungan gajah yang 
        terletak di daerah Lampung tepatnya di Kecamatan Labuhan Ratu, Lampung Timur, Indonesia. 
        Selain di Way Kambas, sekolah gajah (Pusat Latihan Gajah) juga bisa 
        ditemui di Minas, Riau. Gajah Sumatra (Elephas maximus sumatranus) yang hidup 
        di kawasan ini semakin berkurang jumlahnya.
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