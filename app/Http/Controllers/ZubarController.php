<?php

namespace App\Http\Controllers;

use App\Http\Resources\ZubarResource;
use App\Models\Zubar;
use Illuminate\Http\Request;

class ZubarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zubari = Zubar::all();
        return ZubarResource::collection($zubari);
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
     * @param  \App\Models\Zubar  $zubar
     * @return \Illuminate\Http\Response
     */
    public function show(Zubar $zubar)
    {
        return new ZubarResource($zubar);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zubar  $zubar
     * @return \Illuminate\Http\Response
     */
    public function edit(Zubar $zubar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zubar  $zubar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zubar $zubar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zubar  $zubar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zubar $zubar)
    {
        $zubar->delete();
        return response()->json('Zubar je uspešno obrisan iz baze!');
    }
}
