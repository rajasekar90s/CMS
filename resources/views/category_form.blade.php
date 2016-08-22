@extends('layout')
@section('title','Category Form Page')
@section('content')
<div class="container">
	<div class="form_div"><!--form_div opening -->
	
	{!! Form::open(array('action'=>'Admin_controller@store','method' => 'post','class'=>'login_form')) !!}
		<?php echo Form::label('cat_name', 'Category Name'); ?>
				{!! Form::text('cat_name',null,['class'=>'cat_name','id'=>'category','placeholder'=>'Enter Category here..!']) !!}
				{!! Form::submit('Add',['class'=>'Add']) !!}
	{!! Form::close() !!}
	<!--form tag closing here.. -->
	</div><!--form_div closing -->	
</div>				
@endsection
