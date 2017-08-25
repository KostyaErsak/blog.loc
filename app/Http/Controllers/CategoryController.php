<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class CategoryController extends Controller
{
    public function index($id) {

    	$category_name = Category::find($id)->name;

    	//dd($category_name);

    	$posts = Post::all()->where('category_id', $id);
        
        return view('categories', ['id' => $id, 'posts' => $posts, 'category_name' => $category_name]);
    }
}
