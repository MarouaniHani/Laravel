<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        $masterminds = \App\mastermind::all();

        return view('template/index', compact('masterminds'));
    }

    public function store(Request $request)
    {
        $contact = new \App\contact();
        $contact->name = $request->get('name');
        $contact->email = $request->get('email');
        $contact->tel = $request->get('tel');
        $contact->message = $request->get('message');
        $contact->save();

        return redirect('test');
    }

    public function nuage()
    {
        return view('nuageTest');
    }
}
