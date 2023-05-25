@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/tb4.jpeg" class="rounded" alt="Kawasan Wisata Cakat Raya" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Kawasan Wisata Cakat Raya</h1>
      <h2>Alamat : Jl. Lintas Sumatra, Menggala, Kec. Menggala Tim., Kab. Tulang Bawang, Lampung 34611</h2>
      <p>
       Cakat Raya adalah destinasi wisata yang berada di Tulang Bawang, Lampung. 
       Tempat ini mempunyai daya tarik yang berupa keberagaman bangunan adat dan 
       suku. Objek Wisata ini didirikan sebagai simbol penghargaan dan penghormatan terhadap perbedaan 
       yang ada di Tulang Bawang. Tak hanya bangunan rumah, pengunjung dapat 
       pula menyaksikan keindahan dari beberapa candi hindu.
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