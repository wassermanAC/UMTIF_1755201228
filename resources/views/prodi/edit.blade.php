@extends('layouts.app')

@section('title','Halaman Prodi')
@section('bread1','Prodi')
@section('bread2','Data')

@section('content')
	<h3>Form Mahasiswa</h3><hr>

	@include('layouts.alert')

	<form action="{{ route('prodi.update', $prodi->kode_prodi) }}" method="POST">
	@csrf
	@method('PUT')

		<div class="form-group row">
            <label for="kode_prodi" class="col-sm-12">Kode Prodi</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="kode_prodi" name="kode_prodi" placeholder="Kode Prodi" value="{{ $prodi->kode_prodi }}" readonly>
                @error('kode_prodi')<small id="kode_prodi" class="form-text text-danger">{{ $message }}</small>@enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="kode_prodi" class="col-sm-12">Nama Prodi</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="nama_prodi" name="nama_prodi" placeholder="Masukkan Nama Prodi" value="{{ $prodi->nama_prodi }}">
                @error('nama_prodi')<small id="nama_prodi" class="form-text text-danger">{{ $message }}</small>@enderror
            </div>
        </div>
          <div class="form-group row">
            <label for="kode_prodi" class="col-sm-12">Kaprodi</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="kaprodi" name="kaprodi" placeholder="Masukkan Nama Kaprodi" value="{{ $prodi->kaprodi }}">
                @error('kaprodi')<small id="kaprodi" class="form-text text-danger">{{ $message }}</small>@enderror
            </div>
        </div>
        <div class="form-group row">
        <div>
            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
            <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
        </div>
    </form>
@endsection
