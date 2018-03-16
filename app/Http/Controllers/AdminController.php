<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class AdminController extends Controller
{
    public function addContact() {
      return view('addcontact');
    }

    public function allContact() {
      return view('allcontact');
    }

    public function dashboard() {
      return view('welcome');
    }

    public function saveContact(Request $request) {

       $data = array();
       $data['contact_name'] = $request->contact_name;
       $data['contact_number'] = $request->contact_number;


       DB::table('tbl_contact')->insert($data);
       Session::put('message', 'Contact Added Successfullu!!');
       return Redirect::to('/addcontact');
    }
}
