@extends('layouts.app')

@section('title','Halaman Prodi')
@section('bread1','Prodi')
@section('bread2','Data')

@section('content')
	<h3>Master Data Program Studi</h3>
    <p><a href="/prodi/create" class="btn btn-success btn-sm">Tambah</a></p>

    @include('layouts.alert')

	<table class="table table-striped" id="prodi-table">
    	<thead>
    		<tr>
    			<td>NO</td>
    			<td>Kode Prodi</td>
    			<td>Nama Prodi</td>
    			<td>Kaprodi</td>
                <td>Pilihan</td>
    		</tr>
    	</thead>
        <tbody></tbody>
    </table>
    	
    <script>
        $(function () {
    
            //var table = $('#mhs-table').DataTable({
            $('#prodi-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('prodi.list') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    { data: 'kode_prodi', name: 'kode_prodi' },
                    { data: 'nama_prodi', name: 'nama_prodi' },
                    { data: 'kaprodi', name: 'kaprodi' },
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ]
            });
    
        });
    </script>	
@endsection
