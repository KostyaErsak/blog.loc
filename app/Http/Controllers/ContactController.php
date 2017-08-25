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
            if($validator->fails()){
                $messages = $validator->errors();
                return redirect()->back()->withErrors($validator)->withInput(); 
            }
            //print_r($request->all());
        }
        
        return redirect()->back()->with(['message'=>'Запрос отправлен']);
    }
}
