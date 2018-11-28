<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $new  =Contact::all();//->where('role_id', '=', '1');
        return view('Admin.dashboard',['contacts'=>$new]);

        $new1  =Contact::all();//->where('role_id', '=', '1');
        return view('index',['contacts'=>$new1]);
    }

    public function create()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'name'=>'required',
            'email'=> 'required',
            'subject' => 'required',
            'message' => 'required',


        ]);
        $con = new Contact([
            'name' => $request->get('name'),
            'email'=> $request->get('email'),
            'subject'=> $request->get('subject'),
            'message' => $request->get('message'),
        ]);
        $con->save();
        return redirect('/home')->with('success', 'Message Successfully Sent');
    }
}
