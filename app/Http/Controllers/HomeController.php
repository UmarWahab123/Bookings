<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.layout.home');
    }
    public function search()
    {
        $data = $_GET;
        $price = 1750;
        if ($data['adult'] == 2) {
            $price = 2400;
        }
        if ($data['child'] == 1) {
            $price = 2725;
        } elseif ($data['child'] == 2) {
            $price = 3100;
        }
        $data['price'] = $price;

        return view('frontend.layout.search-results', compact('data'));

    }
    public function book()
    {
        $data = $_GET;
        $price = 1750;
        if ($data['adult'] == 2) {
            $price = 2400;
        }
        if ($data['child'] == 1) {
            $price = 2725;
        } elseif ($data['child'] == 2) {
            $price = 3100;
        }
        $data['price'] = $price;

        return view('frontend.layout.book-now', compact('data'));

    }
    public function success()
    {
        return view('frontend.layout.success');

    }
}
