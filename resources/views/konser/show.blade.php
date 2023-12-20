@extends('konser.template')
@section('content')
 
 
<div class="card">
  <div class="card-header">konser Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Nama: {{ $konser->nama }}</h5>
        <p class="card-text">Email : {{ $konser->email }}</p>
        <p class="card-text">Nomor WhatsApp : {{ $konser->nomorwhatsapp }}</p>
        <p class="card-text">Pilihan Tempat Duduk : {{ $konser->pilihantempatduduk }}</p>
        <p class="card-text">Jumlah Tiket : {{ $konser->jumlahtiket }}</p>
  </div>
       
    </hr>
  
  </div>
</div>