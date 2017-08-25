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
        
        
        
        return redirect()->back()->with(['message'=>'Запрос отправлен']);
    }
}
