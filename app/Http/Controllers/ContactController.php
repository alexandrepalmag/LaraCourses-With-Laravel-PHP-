<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Contact;

class ContactController extends Controller
{
    //get
    public function index()
    {

        $contacts = [
            (object) ["Name" => "Maria", "tel" => "123456789"],
            (object) ["Name" => "John", "tel" => "123456789"]
        ];

        $contact = new Contact();

        dd($contact->list());

        return view('contact.index', compact('contacts'));
    }

    //post
    public function criar(Request $req)
    {

        //dd($req->all());
        dd($req);

        // return "this is index of ContactController";

    }

    //put
    public function editar()
    {
        return "this is index of ContactController";
    }
}
