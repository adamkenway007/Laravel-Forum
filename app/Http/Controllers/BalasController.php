<?php

namespace App\Http\Controllers;

use App\Model\Balas;
use App\Model\Pertanyaan;
use Illuminate\Http\Request;
// use App\Http\Resources\BalasResource;
use Symfony\Component\HttpFoundation\Response;


class BalasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Pertanyaan $pertanyaan, Balas $balas)
    {
        // return BalasResource::collection($pertanyaan->balas);
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
    public function store(Pertanyaan $pertanyaan, Request $request)
    {
        $balas = $pertanyaan->balas()->create($request->all());
        return response(['balas' => $balas], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Balas $balas
     * @return \Illuminate\Http\Response
     */
    public function show(Pertanyaan $pertanyaan, Balas $balas)
    {
        dd($balas);
        // return ;
        // return new BalasResource(Balas::find($balas));
        // return new BalasResource($balas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
