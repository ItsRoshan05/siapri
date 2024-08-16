@extends('layouts.app')

@section('konten')
<h1>Hasil Analisis Apriori</h1>
<ul>
    @foreach($hasil as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>
@endsection
