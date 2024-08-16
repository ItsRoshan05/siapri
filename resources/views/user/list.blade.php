@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Users</h1>
    <a href="#" class="btn btn-primary">Tambah Users</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID Users</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Tanggal Pembuatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->created_at }}</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    <form action="#s" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
