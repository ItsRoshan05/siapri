@extends('layouts.app')

@section('konten')
<h1>Daftar Transaksi</h1>
<ul>
    @foreach($transaksi as $item)
        <li>{{ $item->nama_barang }}</li>
    @endforeach
</ul>
@endsection
