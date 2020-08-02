@extends('layouts.app')

@section('title', 'Halaman Mahasiswa')
@section('bread1', 'Mahasiswa')
@section('bread2', 'Daftar')

@section('content')
	 <h3>Master Data Program Studi</h3>
	 <table class="table table-striped" id="mhs-table">
    	<thead>
    		<tr>
    			<td>NO</td>
    			<td>Kode Prodi</td>
    			<td>Nama Prodi</td>
    			<td>Kaprodi</td>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($list_prodi as $key => $item)
    			<tr>
    				<td>{{ $key+1 }}</td>
    				<td>{{ $item->kode_prodi }}</td>
    				<td>{{ $item->nama_prodi }}</td>
    				<td>{{ $item->kaprodi }}</td>
    			</tr>
    		@endforeach
    	</tbody>
    </table>
@endsection
