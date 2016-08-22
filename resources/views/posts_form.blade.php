@extends('layout')
@section('title','Posts Form Page')
@section('content')
<div class="container">
	<div class="form_div"><!--form_div opening -->
		<h3>GIVE YOUR POST HERE..!</h3>
		{!! Form::open(array('action'=>'Admin_controller@PostsStore','method' => 'post','class'=>'login_form','files'=>true)) !!}

	<!--{!! Form::open(array('url'=>'/posts-form','class'=>'login_form','files' => true)) !!}-->
			
				{!! Form::label('Select Category', 'Select Category') !!}
				{!! Form::select('category_drop',$cat,null,['placeholder' => 'Pick a Category...']) !!}
			
			
				{!! Form::label('Title', 'Title') !!}
				{!! Form::text('title',null,['class'=>'title_name','id'=>'title','placeholder'=>'Enter Title here..!']) !!}
			
			
				{!! Form::label('Post Image') !!}
    			{!! Form::file('images',null,['class'=>'post_image']) !!}
    		
    		
    			{!! Form::label('Comments', 'Comments') !!}
				{{ Form::textarea('comments', null,['class'=>'comments','placeholder'=>'Enter Your comments here..!']) }}
			
			
				{!! Form::label('Tags', 'Tags') !!}
				{!! Form::text('tags',null,['class'=>'tags','id'=>'tag','placeholder'=>'Enter our Tag here..!']) !!}
			
			
				{!! Form::submit('Add',['class'=>'Add']) !!}
				
		{!! Form::close() !!}
	<!--form tag closing here.. -->
	</div><!--form_div closing -->	
</div>				
@endsection
