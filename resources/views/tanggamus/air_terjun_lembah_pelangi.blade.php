@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/t2.jpg" class="rounded" alt="Air Terjun Lembah Pelangi" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Air Terjun Lembah Pelangi</h1>
      <h2>Alamat : Sukamaju, Kec. Ulubelu, Kabupaten Tanggamus, Lampung 35686</h2>
      <p>
         Air Terjun Lembah Pelangi ini merupakan salah satu Air terjun yang 
         terdapat di Desa Sukamaju, Kecamatan Ulu Belu, Kabupaten Tanggamus Lampung. Untuk 
         dapat menikmati keindahan Air Terjun ini, para wisatawan harus menempuh waktu 
         perjalan sekitar 119 km dengan waktu tempuh kurang lebih 4 jam 
         perjalanan, jika ditempuh dari pusat kota Bandar Lampung.
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