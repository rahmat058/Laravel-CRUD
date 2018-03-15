<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
