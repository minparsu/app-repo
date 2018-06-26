{{--
	<div class="form-group">
	{!! Form::label('id_aplikasi','ID Aplikasi:', ['class'=> 'control-label']) !!}
	{!! Form::text('id_aplikasi', null, ['class' => 'form-control']) !!} 
	@if ($errors -> has ('id_aplikasi'))
	<span class="help-block">{{$errors ->first('id_aplikasi')}}</span>
	@endif
</div> 

<div class="form-group">
	{!! Form::label('aplikasi','Nama Aplikasi:', ['class'=> 'control-label']) !!}
	{!! Form::text('aplikasi', null, ['class' => 'form-control']) !!}
	@if ($errors -> has ('aplikasi'))
	<span class="help-block">{{$errors ->first('aplikasi')}}</span>
	@endif
</div>

<div class="form-group">
	{!! Form::label('deskripsi','Deskripsi Aplikasi:', ['class' => 'control-label']) !!}
	{!! Form::text('deskripsi', null, ['class' => 'form-control']) !!} 
	@if ($errors -> has ('deskripsi'))
	<span class="help-block">{{$errors ->first('deskripsi')}}</span>
	@endif
</div>			

<div class="form-group">
	{!! Form::label('programmer','Nama Programmer:', ['class' => 'control-label']) !!}
	{!! Form::text('programmer', null, ['class' => 'form-control']) !!} 
	@if ($errors -> has ('programmer'))
	<span class="help-block">{{$errors ->first('programmer')}}</span>
	@endif
</div>

<div class="form-group">
	{!! Form::label('tgl_liveprod','Tgl Mulai Operasi:', ['class' => 'control-label']) !!}
	{!! Form::date('tgl_liveprod', null, ['class' => 'form-control', 'id' => 'tgl_liveprod']) !!} 
	@if ($errors -> has ('tgl_liveprod'))
	<span class="help-block">{{$errors ->first('tgl_liveprod')}}</span>
	@endif
</div>			

<div class="form-group">
	{!! Form::submit ($submitButtonText,['class' => 'btn btn-primary form-control']) !!}
</div> 
--}}

@if (isset($aset))
{!! Form::hidden('id',$aset ->id) !!}
@endif

@if ($errors -> any())
<div class="form-group {{$errors -> has ('id_aplikasi') ? 'has-error' : 'has-success'}}">
	@else
	<div class="form-group">
		@endif	
		{!! Form::label('id_aplikasi','ID Aplikasi:', ['class'=> 'control-label']) !!}
		{!! Form::text('id_aplikasi', null, ['class' => 'form-control']) !!} 
		@if ($errors -> has ('id_aplikasi'))
		<span class="help-block">{{$errors ->first('id_aplikasi')}}</span>
		@endif
	</div> 


@if ($errors -> any())
<div class="form-group {{$errors -> has ('aplikasi') ? 'has-error' : 'has-success'}}">
	@else
	<div class="form-group">
		@endif	
		{!! Form::label('aplikasi','Nama Aplikasi:', ['class'=> 'control-label']) !!}
		{!! Form::text('aplikasi', null, ['class' => 'form-control']) !!}
		@if ($errors -> has ('aplikasi'))
		<span class="help-block">{{$errors ->first('aplikasi')}}</span>
		@endif
	</div>


@if ($errors -> any())
<div class="form-group {{$errors -> has ('deskripsi') ? 'has-error' : 'has-success'}}">
	@else
	<div class="form-group">
		@endif
		{!! Form::label('deskripsi','Deskripsi Aplikasi:', ['class' => 'control-label']) !!}
	{!! Form::text('deskripsi', null, ['class' => 'form-control']) !!} 
	@if ($errors -> has ('deskripsi'))
		<span class="help-block">{{$errors ->first('deskripsi')}}</span>
		@endif
</div>

@if ($errors -> any())
<div class="form-group {{$errors -> has ('programmer') ? 'has-error' : 'has-success'}}">
	@else
	<div class="form-group">
		@endif
		{!! Form::label('programmer','Nama Programmer:', ['class' => 'control-label']) !!}
	{!! Form::text('programmer', null, ['class' => 'form-control']) !!} 
	@if ($errors -> has ('programmer'))
		<span class="help-block">{{$errors ->first('programmer')}}</span>
		@endif 
</div> 

@if ($errors -> any())
<div class="form-group {{$errors -> has ('tgl_liveprod') ? 'has-error' : 'has-success'}}">
	@else
	<div class="form-group">
		@endif
		{!! Form::label('tgl_liveprod','Tgl Mulai Operasi:', ['class' => 'control-label']) !!}
	{!! Form::date('tgl_liveprod', null, ['class' => 'form-control', 'id' => 'tgl_liveprod']) !!} 
	@if ($errors -> has ('tgl_liveprod'))
		<span class="help-block">{{$errors ->first('tgl_liveprod')}}</span>
		@endif
</div> 

<div class="form-group">
	{!! Form::submit ($submitButtonText,['class' => 'btn btn-primary form-control']) !!}
</div> 

