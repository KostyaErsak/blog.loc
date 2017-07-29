<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index($id) {
        
        return view('tags')->with('id', $id);
        
    }
}
