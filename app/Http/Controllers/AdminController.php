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
      $allContact =  DB::table('tbl_contact')
          -> get();

      $manage_contact = view('allcontact')
           -> with ('allContactInfo',   $allContact);

      return view('layout')
           -> with('allcontact', $manage_contact);
    }

    public function dashboard() {
      return view('welcome');
    }

    //Contact Added Part In Database
    public function saveContact(Request $request) {

       $data = array();
       $data['contact_name'] = $request->contact_name;
       $data['contact_number'] = $request->contact_number;


       DB::table('tbl_contact')->insert($data);
       Session::put('message', 'Contact Added Successfullu!!');
       return Redirect::to('/addcontact');
    }

    // Data Delete From Database
    public function deleteContact($contact_id) {
      DB::table('tbl_contact')
           ->where ('contact_id', $contact_id)
           ->delete();

      Session::put('message', 'Delete Contact Successfully!!');
      return Redirect::to('/allcontact');
    }

    // Data Edit From Database
    public function editContact($contact_id) {
      $contact_info = DB::table('tbl_contact')
           ->where ('contact_id', $contact_id)
           ->first();

           $manage_contact = view('contact_edit')
                -> with ('allContactInfo',   $contact_info);

          return view('layout')
                -> with('contact_edit', $manage_contact);
    }

      // Contact Update is here
    public function contactUpdate(Request $request, $contact_id) {

      $data = array();
      $data['contact_name'] = $request->contact_name;
      $data['contact_number'] = $request->contact_number;

      DB::table('tbl_contact')
           ->where ('contact_id', $contact_id)
           ->update($data);

      Session::put('message', 'Contact Update Successfully!!');
      return Redirect::to('/allcontact');
    }
}
