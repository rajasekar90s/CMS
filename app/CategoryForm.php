<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryForm extends Model
{	
	protected $table='category_forms';
    protected $fillable = ['cat_name'];
}
