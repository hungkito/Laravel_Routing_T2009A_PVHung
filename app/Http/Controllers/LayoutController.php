<?php


namespace App\Http\Controllers;


class LayoutController extends Controller
{
    public function page1(){
        return view('user.page1');
    }

    public function page2(){
        return view('user.page2');
    }

    public function page3(){
        return view('user.page3');
    }
}
