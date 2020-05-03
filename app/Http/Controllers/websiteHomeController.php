<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Exprerience;
use App\Models\Service;
use App\Models\participation;
use App\Models\Skill;
use App\Models\Skillheader;

class websiteHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $home = Home::find(2);
        $experience = Exprerience::get();
        $service = Service::get();
        $participation = participation::get();
        $skillheader =Skillheader::get();
        $skill = Skill::with('Skillheader')->get();       
        return view('website.home', [
            'home'          => $home,
            'experience'    => $experience,
            'service'       => $service,
            'participation' => $participation,
            'skill'         => $skill,
            'skillheader'         => $skillheader,

        ]);
    }

    /* public function service(){

        $allEx = Exprerience::get();
        return view('website.home', compact('allEx'));
    } */

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
