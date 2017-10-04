<?php

namespace App\Http\Controllers;

use App\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    /**
     * Display a page where you can vote for cats.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $cats = Cat::all()->toJSON();
        return view('cats.vote')->with('cats', $cats);
    }

    /**
     * Display a listing of cats.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Cat::paginate(20);
        return view('cats.index')->with('cats', $cats);
    }

}
