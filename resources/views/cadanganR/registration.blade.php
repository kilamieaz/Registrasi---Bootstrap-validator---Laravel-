@extends('master')
@section('content')
<div class="col-md-4">
</div>
<div class="col-md-4">
 <br><br><br><br><br>
 <h3 align="middle">Registration</h3>

{!! Form::open(['route' => 'post-registration']) !!}
	<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}"> 
	 {!! Form::label('username', 'Username :') !!}
	 {!! Form::text('username', null, ['class' => 'form-control']) !!}
	 {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
	</div>

	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}"> 
	 {!! Form::label('name', 'Name :') !!}
	 {!! Form::text('name', null, ['class' => 'form-control']) !!}
	 {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
	</div>

	<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"> 
	 {!! Form::label('email', 'Email :') !!}
	 {!! Form::text('email', null, ['class' => 'form-control']) !!}
	 {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
	</div>

	<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}"> 
	 {!! Form::label('password', 'Password :') !!}
	 {!! Form::password('password', ['class' => 'form-control']) !!}
	 {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
	</div>

	<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}"> 
	 {!! Form::label('password_confirmation', 'Re-Password :') !!}
	 {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
	 {!! $errors->first('password_confirmation', '<p class="help-block">:message</p>') !!}
	</div>

	<div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}"> 
	 {!! Form::label('mobile', 'No. HP :') !!}
	 {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
	 {!! $errors->first('mobile', '<p class="help-block">:message</p>') !!}
	</div>

	<div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}"> 
	 {!! Form::label('pria', 'Pria :') !!}
	 {!! Form::radio('gender', '1')!!}
	 {!! Form::label('wanita', 'Wanita :') !!}
	 {!! Form::radio('gender', '2')!!}
	 {!! $errors->first('gender', '<p class="help-block">:message</p>') !!}
	</div>

	<div class="form-group"> 
	 {!! Form::submit('submit', ['class' => 'btn btn-primary form-control']) !!}
	</div>
{!! Form::close() !!}
 
</div>
<div>
</div>
@endsection