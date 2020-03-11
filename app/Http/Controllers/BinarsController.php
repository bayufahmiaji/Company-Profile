<?php

namespace App\Http\Controllers;

use App\Binars;
use Illuminate\Http\Request;

class BinarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          return view('company.admin.webinar.index');
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
     * @param  \App\Binars  $binars
     * @return \Illuminate\Http\Response
     */
    public function show(Binars $binars)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Binars  $binars
     * @return \Illuminate\Http\Response
     */
    public function edit(Binars $binars)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Binars  $binars
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Binars $binars)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Binars  $binars
     * @return \Illuminate\Http\Response
     */
    public function destroy(Binars $binars)
    {
        //
    }
}
