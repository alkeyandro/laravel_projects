<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class xController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function xindex()
    {
        return view('xindex');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function xcreate()
    {
        return view('xcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function xstore(Request $request)
    {
        return view('xstore');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function xshow($id)
    {
        return view('xshow');
    }
}
