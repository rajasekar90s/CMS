<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Request_Cat;
use App\Http\Requests\Request_image;
// use App\Http\Controllers\CategoryForm;
use App\CategoryForm;
use App\PostForm;

class Admin_controller extends Controller
{
    public function AdminControl()
    {
    	return view('Admin_Control');
    }
    public function Categories()
    {   
        $results=\App\categoryForm::select(array('id','cat_name'))->get()->toArray();

    	return view('categories')->with('select_results',$results);
    }
    public function CatForm()
    {
    	return view('category_form');
    }
    public function Posts()
    {
        $results=\App\PostForm::select(array('id','category_drop','title','images','comments','tags'))->get()->toArray();
    	return view('posts')->with('posts_results',$results);
    }
    public function PostsForm()
    {   
        $category=CategoryForm::lists('cat_name','id');
        session(['categories'=>$category]);
        $cat=session('categories')->toArray();
        
    	return view('posts_form',['cat'=>$cat]);
    }
    public function Comments()
    {
    	return view('comments');
    }
    public function CommentsForm()
    {
    	return view('comments_form');
    }

    public function store(Request_Cat $request){
       
        $catForm=CategoryForm::create(['cat_name'=>$request->input('cat_name')]);

        if($catForm){
           
            return redirect(route('cat'));
        }
        else{
            return back()->withInput()->with($error);
        }
    }
    
    public function PostsStore(Request_image $request)
    {
        $random=rand(1000,5000).$request->file('images')->getClientOriginalName();
        $request->file('images')->move( public_path() . '/images/' , $random );

        $postForm=PostForm::create(['category_drop'=>$request->input('category_drop'),'title'=>$request->input('title'),'images'=>$random,'comments'=>$request->input('comments'),'tags'=>$request->input('tags')]);

        //url('/').'/images/'.$random
        return redirect(route('posts'));

    }
    public function postEdit(Request $request,$id)
    {
        $post=PostForm::findorfail($id);

        $category=CategoryForm::lists('cat_name','id');
        session(['categories'=>$category]);
        $cat=session('categories')->toArray();
        return view('postEditForm')->with(['post'=>$post,'cat'=>$cat]);
    }
    public function postUpdate(Request $request,$id)
    {
        $user=PostForm::findorfail($id);

            $user->name     = $request->input('name');
            $user->email    = $request->input('email');

            if($request->has('password'))
            {
                $user->password = $request->input('password');
            }            

            if ($user->save())
            {   
                return redirect(route('show'))->with(['message'=>'Records Updated Successfully']);
            }
    }
    public function postDelete(Request $request,$id)
    {   //die('hsjsll');
        $post=PostForm::findorfail($id);

        if ($post->delete()) 
        {
            return redirect(route('posts'))->with(['message'=>'Records Deleted']);
        }

    }





}
