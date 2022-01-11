<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrdinacijaResource;
use App\Models\Ordinacija;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrdinacijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordinacije = Ordinacija::all();
        return OrdinacijaResource::collection($ordinacije);
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
     * @param  \App\Models\Ordinacija  $ordinacija
     * @return \Illuminate\Http\Response
     */
    public function show(Ordinacija $ordinacija)
    {
        return new OrdinacijaResource($ordinacija);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ordinacija  $ordinacija
     * @return \Illuminate\Http\Response
     */
    public function edit(Ordinacija $ordinacija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ordinacija  $ordinacija
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ordinacija $ordinacija)
    {
        $validator = Validator::make($request->all(), [
            'naziv_ordinacije' => 'required|string',
            'kapacitet' => 'required|integer',
            'vlasnik' => 'required|string',
            'website' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $ordinacija->naziv_ordinacije = $request->naziv_ordinacije;
        $ordinacija->kapacitet = $request->kapacitet;
        $ordinacija->vlasnik = $request->vlasnik;
        $ordinacija->website = $request->website;

        $ordinacija->save();

        return response()->json(['Ordinacija je uspešno izmenjena!', new OrdinacijaResource($ordinacija)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ordinacija  $ordinacija
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ordinacija $ordinacija)
    {
        $ordinacija->delete();
        return response()->json('Ordinacija je uspešno obrisana iz baze!');
    }
}
