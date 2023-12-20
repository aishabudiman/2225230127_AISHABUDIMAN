@extends('konser.template')
@section('content')
<div class="row mt-5">
<div class="card">
  <div class="card-header text-center"><h3>RESGISTRASI KONSER IQBAAL</h3></div>
  <div class="card-body">
      
      <form action="{{ url('konser') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" class="form-control"></br>
        <label>Email</label></br>
        <input type="email" name="email" id="email" class="form-control"></br>
        <label>Nomor WhatsApp</label></br>
        <input type="text" name="nomorwhatsapp" id="nomorwhatsapp" class="form-control"></br>
        <label>Pilihan Tempat Duduk</label></br>
        <input type="text" name="pilihantempatduduk" id="pilihantempatduduk" class="form-control"></br>
        <label>Jumlah Tiket</label></br>
        <input type="text" name="jumlahtiket" id="jumlahtiket" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>

    </form>
   
  </div>
</div>
 
@stop