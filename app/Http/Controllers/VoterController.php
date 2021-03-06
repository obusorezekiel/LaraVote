<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Votes;

class VoterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('voter');
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
            'president' => 'required',
            'vp_acad' => 'required',
            'vp_admin' => 'required',
            'gen_sec' => 'required',
            'ass_sec' => 'required',
            'fin_sec' => 'required',
            'welfare' => 'required',
            'prayer' => 'required',
            'itt' => 'required',
            'ret' => 'required',
            'vybes' => 'required',
            'mnt' => 'required',
        ]);

        $vote = new Votes;
        $vote->president = $request->input('president');
        $vote->vp_acad = $request->input('vp_acad');
        $vote->vp_admin = $request->input('vp_admin');
        $vote->gen_sec = $request->input('gen_sec');
        $vote->fin_sec = $request->input('ass_sec');
        $vote->ass_sec = $request->input('fin_sec');
        $vote->welfare = $request->input('welfare');
        $vote->prayer = $request->input('prayer');
        $vote->itt = $request->input('itt');
        $vote->ret = $request->input('ret');
        $vote->vybes = $request->input('vybes');
        $vote->mnt = $request->input('mnt');
        $vote->save();

        return redirect('/home')->with('success', 'Post Created');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
