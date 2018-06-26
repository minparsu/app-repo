@extends ('template')

@section ('main')
<div id="aset">
	<h2> Detail Aplikasi </h2>

	<table class="table table-striped">
		<tr>
			<th>ID Aplikasi </th>
			<td>{{ $aset->id_aplikasi }}</td>
		</tr>
		<tr>
			<th>Nama Aplikasi</th>
			<td>{{ $aset->aplikasi }}</td>
		</tr>
		<tr>
			<th>Deskripsi Aplikasi</th>
			<td>{{ $aset->deskripsi }}</td>
		</tr>
		<tr>
			<th>Programmer</th>
			<td>{{ $aset->programmer }}</td>
		</tr>
		<tr>
			<th>Tgl Mulai Operasi</th>
			<td>{{ $aset->tgl_liveprod }}</td>
		</tr>
	</table>
</div>

@stop

@section('footer')
@include('footer')
@stop