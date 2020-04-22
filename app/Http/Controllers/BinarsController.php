<?php

namespace App\Http\Controllers;

use App\Binar;
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
        $binar = Binar::all();
          return view('company.admin.webinar.index',compact('binar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.admin.webinar.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'file' => 'required',
             'description' => 'required',
        ]);
 
        $image = $request->file('file');
        $nama_file = $image->getClientOriginalName();
        
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'assets/uploads/webinar';
        
        $image->move($tujuan_upload,$nama_file);

        Binar::create([
            'title' => $request->title,
            'description' => $request->description,
            'post_by' => $request->postby,
            'image' => $nama_file,
        ]);

        return redirect('/webinar');
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
