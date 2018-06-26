@extends ('template')

@section ('main')
<div id='aset'>
	<h2> Edit Aplikasi </h2>

	{!! Form::model ($aset, ['method' => 'PATCH', 'action' => ['AsetController@update', $aset -> id]]) !!}

	@include('aset.form', ['submitButtonText' => 'Update Aplikasi'])

	{!! Form::close() !!}
</div>

@stop

@section('footer')
@include('footer')
@stop