<?php

namespace App\Http\Controllers;

class HomeController extends Controller

{
    public function test1()
    {
        return view("view-1");
    }

    public function test2()
    {
        return view("view-2");
    }

    public function test3()
    {
        return view("view-3");
    }

    public function index()
    {
    return view ("test-tema");
    }

}