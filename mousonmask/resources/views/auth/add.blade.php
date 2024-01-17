@extends('layout')
@section('content')
    <div class="container">
        <div class="row pt-4">
            <div class="col">
                <h2>Form Menu</h2>
                @if (session()->has('info'))
                    <div class="alert alert-success">
                        {{ session()->get('info') }}
                    </div>
                @endif
                <form action="{{ url('menu/store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_menu">Nama</label>
                        <input type="text" name="nama_menu" id="nama_menu" class="form-control"
                            value="{{ old('nama_menu') }}">
                        @error('nama_menu')
                            <div class="text-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <input type="text" name="category" id="category" class="form-control"
                            value="{{ old('category') }}">
                        @error('category')
                            <div class="text-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" id="harga" class="form-control"
                            value="{{ old('harga') }}">
                        @error('harga')
                            <div class="text-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto/Logo</label>
                        <input type="file" name="foto" id="foto" class="form-control">
                        @error('foto')
                            <div class="text-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
