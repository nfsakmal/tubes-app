@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/lt5.jpg" class="rounded" alt="Danau Telogo Rejo Sendang Baru" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Danau Telogo Rejo Sendang Baru</h1>
      <h2>Alamat : Desa Sendang Baru, Kecamatan Sendang Agung, Lampung Tengah, Lampung.</h2>
      <p>
        Danau yang berlokasi di kecamatan Sendang Agung ini selain berfungsi 
        sebagai irigasi persawahan, juga menyimpan potensi wisata. Letaknya yang ada 
        di kaki Gunung Bukit Barisan membuatnya memiliki pemandangan hijau yang 
        menyejukan. Banyak ikan air tawar yang hidup di danau membuatnya 
        sangat cocok dijadikan sebagai spot mancing yang keren dan suasana 
        yang bisa jadi alternatif menghilangkan stres
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