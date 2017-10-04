<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Vote;
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
        return view("cats.vote")->with("cats", $cats);
    }

    /**
     * Display a listing of cats.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Cat::limit(10)->get()->sortByDesc(function($cat){
            return $cat->score();
        });
        return view("cats.index")->with("cats", $cats);
    }

    /**
     * Vote for a cat
     *
     * @return \Illuminate\Http\Response
     */
    public function vote(Request $request)
    {
        $cat = Cat::findOrFail($request->id);
        $positive = $request->vote == "positive" ? 1 : 0;
        $vote = Vote::create([
            "cat_id" => $cat->id,
            "positive" => $positive,
        ]);
        return 200;
    }

}
