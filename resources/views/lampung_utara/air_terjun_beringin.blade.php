@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/lu1.jpg" class="rounded" alt="Air Terjun Beringin" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Air Terjun Beringin</h1>
      <h2>Alamat : Tj. Baru, Kec. Bukit Kemuning, Kabupaten Lampung Utara, Lampung 34556</h2>
      <p>
        Air Terjun Beringin ini berada di wilayah Kecamatan Bukit Kemuning yang 
        memang memiliki pesona alam yang masih sangat asri. Mulai dari lebatnya 
        pepohonan di hutan dan juga kondisi alam di kawasan air terjun. 
        Memiliki ketinggian air terjun di atas 10 meter dan debit airnya sangat 
        deras membuat wisatawan terpuaskan bermain air di tempat wisata di Lampung 
        Utara ini.
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