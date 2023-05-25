@extends('layouts.main')

@section('container')
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-4 p-3 bg-danger text-white">.
       <img src="/img/tb2.jpg" class="rounded" alt="Tugu Empat Marga" class = "center" width = "500"> 
    </div>
    <div class="col-sm-8 p-3 bg-danger text-white">.
      <h1>Tugu Empat Marga</h1>
      <h2>Alamat : Bandar Dewa, Kec. Tulang Bawang Tengah, Kab. Tulang Bawang Barat, Lampung 34693</h2>
      <p>
       Tugu tersebut merupakan relif tokoh empat marga, diantaranya yaitu Raja Tegamoan 
       merupakan keturunan dari Candrapura, Candrapura sendiri merupakan anak keturunan dari raja 
       Tulang Bawang Minak Pati Pejurit gelar Minak kemala bumi. Tegamoan juga 
       marga yang paling tua dalam empat marga tulang bawang, yang didirikan 
       dikampung pagar dewa. Tokoh selanjutnya Marga Buay Bulan, Suwai Umpu, dan 
       terakhir Buay AjiDalam hal wilayah adat dan istiadat, hasil musyawarah empat 
       marga tegamoanlah yang mengesahkanya, baik dari keturunan Chandrapura maupun yang mewarisi pepadun 
       Stan Jimat.
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