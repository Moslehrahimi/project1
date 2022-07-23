<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index(){

        $pagetitle='rahimi';

        return view('dashboard.dashboard',compact('pagetitle'));
    }

    // $title = 'Welcome';

    // return view('welcome', compact('title'));
