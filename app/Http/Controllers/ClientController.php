<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home()
    {
        return view('client.pages.home');
    }
    public function about()
    {
        return view('client.pages.about');
    }
    public function course()
    {
        return view('client.pages.course');
    }
    public function instructor()
    {
        return view('client.pages.instructor');
    }
    public function instructorDetail()
    {
        return view('client.pages.instructor-detail');
    }
    public function blog()
    {
        return view('client.pages.blog');
    }
    public function blogDetail()
    {
        return view('client.pages.blog-detail');
    }
    public function contact()
    {
        return view('client.pages.contact');
    }
}
