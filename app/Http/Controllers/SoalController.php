<?php

namespace App\Http\Controllers;

use App\Soal;
use Illuminate\Http\Request;


class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            $request->validate($request, [
                "soal" => 'required',
                'jawaban_a' => 'required',
                'jawaban_b' => 'required',
                'jawaban_c' => 'required',
                'jawaban_e' => 'required',
                "category_id" => "required"
            ]);

            Soal::create($request->all());

            return redirect()->route('soal.index')->with('success','Soal Behasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function show(soal $soal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function edit(soal $soal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, soal $soal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function destroy(soal $soal)
    {
        //
    }
}
