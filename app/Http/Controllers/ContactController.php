<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index() {
        
        return view('contact');
        
    }
    
    public function get(ContactRequest $request) {
        
        if($request->isMethod('post')){
            
            print_r($request->all());
        }
        
        return view('contact');
    }
}
