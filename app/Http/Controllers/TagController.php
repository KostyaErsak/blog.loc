<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use App\Tag;

class TagController extends Controller
{
    public function index($id) {
        
        $posts = Tag::all()->where('id', $id)->first()->posts;
        
        $tagName = Tag::find($id)->name;
               
        return view('tags', ['id' => $id, 'tag_name' => $tagName, 'posts' => $posts]);
        
    }
}
