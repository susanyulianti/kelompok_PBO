<?php

namespace App\Http\Controllers;

use App\Models\BookReturn;
use App\Models\Transaction;
use Illuminate\Http\Request;

class BookReturnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookreturns = BookReturn::all();
        return view('BookReturn.index', compact('bookreturns'));
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
        BookReturn::create($request->all());
        // dd($request->temp);
        Transaction::where('id', '=', $request->temp)->delete();
        return redirect()->route('bookreturn.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookReturn  $bookReturn
     * @return \Illuminate\Http\Response
     */
    public function show(BookReturn $bookReturn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookReturn  $bookReturn
     * @return \Illuminate\Http\Response
     */
    public function edit(BookReturn $bookReturn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookReturn  $bookReturn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookReturn $bookReturn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookReturn  $bookReturn
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookReturn $bookReturn)
    {
        //
    }
}
