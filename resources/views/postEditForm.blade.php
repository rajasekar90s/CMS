@extends('layout')
@section('title','Edit Posts Form Page')
@section('content')
<div class="container">
	<div class="form_div"><!--form_div opening -->
		<h3>EDIT YOUR POST HERE..!</h3>
		{!! Form::open(array('action'=>'Admin_controller@PostsStore','method' => 'post','class'=>'login_form','files'=>true)) !!}

	<!--{!! Form::open(array('url'=>'/posts-form','class'=>'login_form','files' => true)) !!}-->	
				<?php $cat=(isset($cat)) ? $cat: ' ' ;?>			
				{!! Form::label('Select Category', 'Select Category') !!}
				{!! Form::select('category_drop',$cat,null,['placeholder' => 'Pick a Category...']) !!}
				
				<?php $title=(isset($post)) ? $post->title: ' ' ;?>			
			
				{!! Form::label('Title', 'Title') !!}
				{!! Form::text('title',$title,['class'=>'title_name','id'=>'title','placeholder'=>'Enter Title here..!']) !!}
				
				
				{!! Form::label('Post Image') !!}
    			{!! Form::file('images',null,['class'=>'post_image']) !!}
    		
    			<?php $comments=(isset($post)) ? $post->comments: ' ' ;?>			
    			{!! Form::label('Comments', 'Comments') !!}
				{{ Form::textarea('comments',$comments,['class'=>'comments','placeholder'=>'Enter Your comments here..!']) }}
			
				<?php $tags=(isset($post)) ? $post->tags: ' ' ;?>			
				{!! Form::label('Tags', 'Tags') !!}
				{!! Form::text('tags',$tags,['class'=>'tags','id'=>'tag','placeholder'=>'Enter our Tag here..!']) !!}
			
			
				{!! Form::submit('Add',['class'=>'Add']) !!}
				
		{!! Form::close() !!}
	<!--form tag closing here.. -->
	</div><!--form_div closing -->	
</div>				
@endsection
