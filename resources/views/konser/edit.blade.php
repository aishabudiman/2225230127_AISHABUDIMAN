@extends('konser.template')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('konser/' .$konser->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$konser->id}}" id="id" />
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" value="{{$konser->nama}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="email" name="email" id="email" value="{{$konser->email}}" class="form-control"></br>
        <label>Nomor WhatsApp</label></br>
        <input type="text" name="nomorwhatsapp" id="nomorwhatsapp" value="{{$konser->nomorwhatsapp}}" class="form-control"></br>
        <label>Pilihan Tempat Duduk</label></br>
        <input type="text" name="pilihantempatduduk" id="pilihantempatduduk" value="{{$konser->pilihantempatduduk}}" class="form-control"></br>
        <label>Jumlah Tiket</label></br>
        <input type="text" name="jumlahtiket" id="jumlahtiket" value="{{$konser->jumlahtiket}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
@stop