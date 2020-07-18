@extends('layout/main')

@section('title', 'Mahasiswa')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Daftar Mahasiswa</h1>
                
                <a href="{{ url('/students/create') }}" class="btn btn-primary my-2">Tambah Data Mahasiswa</a>
                <a href="{{ url('/students/trash') }}" class="btn btn-warning my-2">Data Terhapus Mahasiswa</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <ul class="list-group">
                    @foreach( $data as $data )
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $data->name }}
                        <a href="{{ url('/students', $data->id) }}" class="badge badge-info">detail</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection

