@extends('layout/main')

@section('title', 'Mahasiswa')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Daftar Mahasiswa</h1>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $data->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $data->email }}</h6>
                        <p class="card-text">{{ $data->jurusan }}</p>
                        <a href="{{ $data->id }}/edit" class="btn btn-primary">Edit</a>
                        <form action="{{ $data->id }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ url('/students') }}" class="card-link">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
