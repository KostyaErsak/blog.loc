<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

use User;

use TCG\Voyager\Models\Post;

class SiteController extends Controller
{

	use AuthenticatesUsers;

    public function index(){

    	$posts = Post::all();

        return view('firstPage', ['posts' => $posts]);
    }
}
