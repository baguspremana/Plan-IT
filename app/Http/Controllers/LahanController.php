<?php

namespace App\Http\Controllers;

use App\lahan;
use Illuminate\Http\Request;

class LahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return 'anda masuk ke pemilik lahan dashboard';
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
     * @param  \App\lahan  $lahan
     * @return \Illuminate\Http\Response
     */
    public function show(lahan $lahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lahan  $lahan
     * @return \Illuminate\Http\Response
     */
    public function edit(lahan $lahan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lahan  $lahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lahan $lahan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lahan  $lahan
     * @return \Illuminate\Http\Response
     */
    public function destroy(lahan $lahan)
    {
        //
    }
}
