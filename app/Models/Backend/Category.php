<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function parent(){
    	return $this->belongsTo(Category::class, 'parent_id');
    }

    public function products(){
    	return $this->belongsTo(Product::class);
    }
}
