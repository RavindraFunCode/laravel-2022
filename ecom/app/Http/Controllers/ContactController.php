<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){

    }
    public function save_contact(Request $req){
    	// echo "<pre>";
    	// print_r($req->all());
    	// echo $req->file('profile')->store('public/uploads');
    	// or
    	$filename = time()."-profile-".$req->file("profile")->getClientOriginalExtension();
    	echo $req->file('profile')->storeAs('public/uploads', $filename);
    }
}
