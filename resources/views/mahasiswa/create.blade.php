@extends('layouts.app')

@section('title', 'Halaman Mahasiswa')
@section('bread1', 'Mahasiswa')
@section('bread2', 'Daftar')

@section('content')
	<h3>Form Mahasiswa</h3><hr>

	@include('layouts.alert')

	<form action="/mhs/store" method="post">
	@csrf <!-- akses token data-data yang dikirim ke controler -->

		<div class="form-group row">
		    <label for="nim" class="col-sm-12">NIM</label>
		    <div class="col-sm-3">
		    	<input type="text" class="form-control" id="nim" name="nim" placeholder="Nomor Induk Mahasiswa">
		    	@error('nim')<small id="nim" class="form-text text-danger">{{ $message }}</small>@enderror
		    </div>
		</div>
		<div class="form-group row">
		    <label for="nim" class="col-sm-12">Nama Lengkap</label>
		    <div class="col-sm-3">
		    	<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan Nama Dengan Benar">
		    	@error('nama_lengkap')<small id="nama_lengkap" class="form-text text-danger">{{ $message }}</small>@enderror
		    </div>
		</div>
		<div class="form-group row">
		    <label for="nim" class="col-sm-12">Program Studi</label>
		    <div class="col-sm-3">
		    	<select class="form-control" id="prodi" name="prodi">
		    		@foreach($prodi as $item)
		    			<option value="{{ $item->kode_prodi }}">{{ $item->nama_prodi }}</option>
		    		@endforeach
		    	</select>
		    </div>
		</div>
		<div class="form-group row">
		    <label for="nim" class="col-sm-12">Alamat</label>
		    <div class="col-sm-8">
		    	<textarea class="form-control" id="alamat" name="alamat"></textarea>
		    	<small id="alamat" class="form-text text-muted">
		    </div>
		</div>
		<div>
  			<button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
  			<a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
  		</div>
	</form>
@endsection