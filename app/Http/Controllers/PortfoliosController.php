<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use App\Education;
use App\Contact;

class PortfoliosController extends Controller
{
    public function index(){
        $data= Portfolio::all();
        $edudata=Education::all();
        return view('e ',compact("data",'edudata'));
    }
    public function store(Request $request){
        $td = new Contact;
        $td->name=$request->input('contact_name');
        $td->address=$request->input('contact_email');
        $td->subject=$request->input('contact_subject');
        $td->message=$request->input('contact_message');
        $td->save();
        return redirect('/');
    }
}






