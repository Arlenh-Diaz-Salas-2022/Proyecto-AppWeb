<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
class ContactanosController extends Controller
{
    public function __invoke(){
        return view('contactanos.index');
    }
    public function store(Request $request){
        $correo = new ContactanosMailable($request->all());
        Mail::to('arlendiaz16@gmail.com')->send($correo);
        return view('welcome');
    }
}
