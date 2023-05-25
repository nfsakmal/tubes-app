@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/ps5.jpg" class="rounded" alt="Bukit Puncak Pangonan" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Bukit Puncak Pangonan</h1>
      <h2>Alamat : Fajar Esuk, Kec. Pringsewu, Kabupaten Pringsewu, Lampung 35373</h2>
      <p>
        Bukit Pangonan merupakan sebuah gambaran tentang kreasi tangan manusia, yang dipertemukan 
        dengan view alam Bukit Pangonan yang menawan. Kreasi tangan manusia yang 
        ada di setiap sudut Bukit Pangonan sangat kreatif, bahan bakunya didominasi 
        dari alam, serta sangat mengerti akan kebutuhan era kekinian, yaitu menyajikan 
        spot selfie yang instagramable. Bukit Pangonan sering disebut juga dengan nama 
        Bukit Pangonan Pringsewu, karena letaknya berada di Kabupaten Pringsewu, Provinsi Lampung.
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