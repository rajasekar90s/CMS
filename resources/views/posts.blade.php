@extends('layout')
@section('title','Posts Page')
@section('content')
	<h3>hai you are in posts page</h3>
	<div class="add_new">	
					{!! Html::link(route('posts-form'),'Add New',['id'=>'AddNew_link']) !!}
	</div>
	<div class="posts_listing">
		<table>
			<tr>
				<th>ID</th>
				<th>CATEGORY</th>
				<th>TITLE</th>
				<th>IMAGES</th>
				<th>POSTS</th>
				<th>TAGS</th>
				<th>ACTION1</th>
				<th>ACTION2</th>
			</tr>	
			@foreach($posts_results as $post_result)
			<tr>
				<td>{!! $post_result['id'] !!}</td>
				<td>{!! $post_result['category_drop'] !!}</td>
				<td>{!! $post_result['title'] !!}</td>
				<td><img src="{{ asset('images/' . $post_result['images']) }}"></td>
				<td>{!! $post_result['comments'] !!}</td>
				<td>{!! $post_result['tags'] !!}</td>
				<td><a class="btn" href="{{ route('edit-post', $post_result['id']) }}">Edit</a></td>
				<td><a href="<?php echo url('/').'/posts-delete/'. $post_result['id'];?>">Delete</a></td>
			</tr>	
			
			@endforeach	
		</table>
		
	</div>

	<!--<td>{{ Html::link(route('edit-post','$post_result["id"]'),'Edit',['id'=>'edit']) }}</td>
				<td>{{ Html::link(route('delete-post'),'Delete',['id'=>'delete']) }}</td> -->
		<!--{{ HTML::image('asset("images/".$post_result["images"])','alt') }} -->
@endsection	