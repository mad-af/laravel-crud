@extends('layout/main')

@section('title', 'Mahasiswa')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Tambah Ubah Mahasiswa</h1>

                <form method="post" action="/students/{{ $student->id }}">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $student->name }}" placeholder="Masukkan Nama">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ $student->email }}" placeholder="Masukkan Email">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input name="jurusan" type="text" class="form-control @error('jurusan') is-invalid @enderror" value="{{ $student->jurusan }}" placeholder="Masukkan Jurusan">
                        @error('jurusan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection
