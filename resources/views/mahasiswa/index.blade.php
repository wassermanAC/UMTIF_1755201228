@extends('layouts.app')

@section('title', 'Halaman Mahasiswa')
@section('bread1', 'Mahasiswa')
@section('bread2', 'Daftar')

@section('content')
    <p>Daftar Mahasiswa</p>
    <table class="table table-striped" id="mhs-table">
    	<thead>
    		<tr>
    			<td>NO</td>
    			<td>NIM</td>
    			<td>Nama Lengkap</td>
    			<td>Prodi</td>
    			<td>Created At</td>
    			<td>Updated At</td>
    		</tr>
    	</thead>
    	<tbody></tbody>
    </table>

    <script>
  		$(function () {
    
	    	var table = $('#mhs-table').DataTable({
	        	processing: true,
		        serverSide: true,
		        ajax: "{{ route('mhs_list') }}",
		        columns: [
		            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
		            {data: 'nim', name: 'nim'},
		            {data: 'nama_lengkap', name: 'nama_lengkap'},
		            {data: 'prodi', name: 'prodi'},
		            {data: 'created_at', name: 'created_at'},
            		{data: 'updated_at', name: 'updated_at'},
		        ]
	    	});
    
  		});
	</script>
@endsection