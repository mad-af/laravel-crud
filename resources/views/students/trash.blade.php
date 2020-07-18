@extends('layout/main')

@section('title', 'Mahasiswa')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Data Terhapus Mahasiswa</h1>

                <a href="{{ url('/students') }}" class="btn btn-primary my-2">Kembali</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <ul class="list-group">
                    @foreach( $data as $data )
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $data->name }}
                        <div>
                            <form action="{{ url('/students/trash', $data->id) }}" method="post" class="d-inline">
                                @csrf
                                <button type="submit"  class="btn btn-success">Restore</button>
                            </form>
                            <form action="{{ url('/students/trash', $data->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit"  class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
