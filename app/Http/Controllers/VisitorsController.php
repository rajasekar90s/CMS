<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\PostForm;
use App\categoryForm;

class VisitorsController extends Controller
{
    public function VisitorsPage()
    {
    	$cat_results=\App\categoryForm::select(array('id','cat_name'))->get()->toArray();

    	$results=\App\PostForm::select(array('id','category_drop','title','images','comments','tags','created_at','updated_at'))->get()->toArray();
    	return view('visitors')->with(['posts_results'=>$results,'cat_results'=>$cat_results]);
    	
    }
    public function CategoryViseView($id)
    {
    	$results=\App\PostForm::findorfail($id);
    	
    	return view('visitors')->with(['posts_results'=>$results]);
    }
}
