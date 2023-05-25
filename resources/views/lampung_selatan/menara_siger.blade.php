@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/ls4.jpg" class="rounded" alt="Menara Siger" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Menara Siger</h1>
      <h2>Alamat : Jalan Lintas Sumatra, Bakauheni, Kecamatan Bakauheni, Kabupaten Lampung Selatan, Lampung 35592
      </h2>
      <p>
        Menara Siger merupakan simbol identitas di ujung Tenggara Lampung. Menara 
        ini memiliki bentuk yang unik dengan sembilan kerucut berwarna kuning 
        keemasan yang berderet memanjang, bentuknya mengadaptasi mahkota pengantin wanita dalam 
        adat Lampung.
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