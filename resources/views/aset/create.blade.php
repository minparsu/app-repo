@extends ('template')

@section ('main')
<div id='aset'>
	<h2> Tambah Aplikasi </h2>

	{{-- @include('aset.form_error_list') --}}

	{!! Form::open(['url' => 'aset']) !!}
	@include('aset.form', ['submitButtonText' => 'Tambah Aplikasi'])
	
	{!! Form::close() !!}
</div>

@stop

@section('footer')
@include('footer')
@stop