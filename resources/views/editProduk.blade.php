@extends('adminlte::page')

@section('title', 'Edit Produk ')

@section('content_header')
    <h1>Edit Produk</h1>
@stop

@section('content')
<form action="{{route('admin.updateProduk',['id' => $produk->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="nama">nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="nama" value="{{$produk->nama}}" required>
      </div>
      <div class="form-group">
        <label for="categories_id">Kategori</label>
        <select name="categories_id" class="form-control" id="categories_id">
            @foreach ($kat as $item)
            <option value="{{$item->id}}" {{ $item->id == $produk->categories_id  ? 'selected' : '' }}>{{$item->kategori}}</option>
            @endforeach
           
        </select>
      </div>
      <div class="form-group">
        <label for="brands_id">Merek</label>
        <select name="brands_id" class="form-control"  id="brands_id">
            @foreach ($merk as $i)
            <option value="{{$i->id}}" {{ $i->id == $produk->brands_id  ? 'selected' : '' }}>{{$i->merk}}</option>
            @endforeach
            
        </select>
      </div>
      <div class="form-group">
        <label for="harga">Harga</label>
        <input type="text" class="form-control" id="harga" name="harga" placeholder="harga" required value="{{$produk->harga}}">
      </div>
      <div class="form-group">
        <label for="stok">Stok</label>
        <input type="text" class="form-control" id="stok" name="stok" placeholder="stok" required value="{{$produk->stok}}">
      </div>
      <div class="form-group">
        <label for="foto">Foto</label>
        <input type="file" class="form-control" id="foto" name="foto" placeholder="foto">
      </div>
    
    <button class="btn btn-primary" type="submit">Submit</button>
</form>
@stop

@section('footer')
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 1.0.0
    </div>
    <strong>CopyRight &copy; {{date('Y')}}
    <a href="http://ft.unsur.ac.id/" target="_blank">Fakultas Teknik,
    Universitas Suryakancana</a>.</strong> All Right reserved
@stop

@section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
        <script>console.log ('Hi!')</script>
@stop
