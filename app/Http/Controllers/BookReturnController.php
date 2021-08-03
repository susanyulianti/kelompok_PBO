<?php

namespace App\Http\Controllers;

use App\Models\BookReturn;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
        // ->map(function($book) {
        //     $tglPinjam = $book->tgl_peminjaman;
        //     return [
        //         'tanggal_pinjam' => $tglPinjam->diffInDays($book->created_at)
        //     ];
        // });

        // dd($bookreturns);

        // foreach ($bookreturns as $data) {
            // $from = $data->tgl_peminjaman->format('Y/m/d');
            // $from = \Carbon\Carbon::parse($data->tgl_peminjaman)->format('Y/m/d');
            // $to = \Carbon\Carbon::parse($data->created_at)->format('Y/m/d');
            // $interval = $from->diffInDays($to);
            // $days = $interval->format('%a');
            // $formatted_dt1=Carbon::parse($data->tgl_peminjaman);

            // $formatted_dt2=Carbon::parse($data->created_at);

            // $date_diff=$formatted_dt1->diffInDays($formatted_dt2);
            // dd($date_diff);
        // }
        // $roomPricePerDay = 4990; // room price in cents

        // $toDate = Carbon::createMidnightDate(2019, 11, 20);
        // $fromDate = Carbon::createMidnightDate(2019, 11, 18);

        // $diffDays = $fromDate->diffInDays($toDate); // 2

        // $roomPrice = $diffDays * $roomPricePerDay; // 9980
        // dd($diffDays);
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
