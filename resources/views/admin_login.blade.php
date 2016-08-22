@extends('layout')
@section('title','Admin Login')

@section('content')
<div class="container">
	<div class="form_div"><!--form_div opening -->
		@if (count($errors))
				<ul class="danger">
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
				</ul>
			@endif
		<h3 class="admin_title">ADMIN LOGIN</h3>
			<!--form tag opening -->
			{!! Form::open(array('url'=>'/Admin','class'=>'login_form')) !!}
			
				<?php echo Form::label('email', 'Email-ID'); ?>
				{!! Form::text('email',null,['class'=>'email','id'=>'email','placeholder'=>'Enter Your Email-id here..!']) !!}
		
		 	
				<?php echo Form::label('password', 'Password'); ?>
				{!! Form::password('password',['class'=>'password','id'=>'password','placeholder'=>'Enter Your password here..!']) !!}
		
		
				{!! Form::submit('Login',['class'=>'login']) !!}
		
		
			{!! Form::close() !!}		
			<!--form tag closing here.. -->
	</div><!--form_div closing -->	
</div>
@endsection