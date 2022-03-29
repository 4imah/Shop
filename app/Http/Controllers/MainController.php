<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function aboutUs()
    {
        return view('aboutUs');
    }

    public function blogDetails()
    {
        return view('blogDetails');
    }

    public function blogLeftSidebar()
    {
        return view('blogLeftSidebar');
    }

    public function blog()
    {
        return view('blog');
    }

    public function cart()
    {
        return view('cart');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function contact()
    {
        return view('contact');
    }

    public function index2()
    {
        return view('index2');
    }

    public function loginRegister()
    {
        return view('loginRegister');
    }

    public function myAccount()
    {
        return view('myAccount');
    }

    public function productDetails()
    {
        return view('productDetails');
    }

    public function shopList()
    {
        return view('shopList');
    }

    public function shopPage()
    {
        
        return view('shopPage');
    }

    public function wishlist()
    {
        return view('wishlist');
    }

    
}
