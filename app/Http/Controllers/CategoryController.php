<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($id) {
        
        return view('categories')->with('id', $id);
    }
}
