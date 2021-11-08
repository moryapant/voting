<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $votes = Vote::all();
        //  $array1 = $votes1->toArray();
        //  dd($array1);

        //  $votes2 = Vote::all()->where('month', 8);
        //  $array2 = $votes2->toArray();
        //  dd($array2);

        // $votes1 = collect(['name' => 'Desk', 'price' => 200]);

        // $votes1 = collect(Vote::all()->where('month', 9)->get()->toArray());

        // $votes2 = Vote::all()->where('month', 8);
        // $counts1 = $votes1->pluck('count');
        // $counts2 = $votes2->pluck('count');
        //$updown = $counts2 - $counts1;


        // $updown = $counts1->diff($counts2);
        // dd($updown);

        // $votes2 = Vote::all()->where('month', 8);



        return view('welcome', compact('votes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function show(Vote $vote, $id)
    {

        // dd($vote);
        $actress = Vote::find($id);
        return view('actress', compact('actress'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function edit(Vote $vote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vote $vote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vote $vote)
    {
        //
    }
}
