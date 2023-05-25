@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/t1.jpg" class="rounded" alt="Sharks Teeth Beach" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Sharks Teeth Beach</h1>
      <h2>Alamat : Pekon Susuk, Kelumbayan, Tanggamus Regency, Lampung</h2>
      <p>
        Istilah gigi hiu disematkan sebagai nama pantai ini dikarenakan bebatuan karang 
        disana tersusun dalam formasi yang menyerupai barisan gigi hiu. Gugusan karang 
        tersebut tersusun dari bebatuan yang tinggi dan lebarnya bervariasi, mulai dari 
        1 hingga 10 meter untuk ketinggiannya.
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