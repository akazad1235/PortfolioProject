<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Models\Skillheader;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getSkill = Skill::get();
        return view('admin.pages.skill.manage', compact('getSkill'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=  Skillheader::get();
        return view('admin.pages.skill.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $validatedData = $request->validate([
            'title' => 'required|max:10|min:2|unique:skills',
            'value' => 'required',
            'status' => 'size:1',
        ]);
        try{
            Skill::create([
            'header_id' => $request->header_name,
            'title' => $request->title,
            'value' => $request->value,
            'status' => $request->status,
        ]);

        setMessage('success', 'Skill Has been Added Successfull');
        }catch(Exception $e){
        setMessage('danger', 'Skill Has been Added Faild');
        }
        return redirect()->back();
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
        $id = base64_decode($id);
            $skills = Skill::find($id);
            return view('admin.pages.skill.update', compact('skills'));
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
        $validatedData = $request->validate([
            'title' => 'required|max:10|min:2',
            'value' => 'required',
            'status' => 'size:1',
        ]);
        try{
        $id = base64_decode($id);
        $getData = Skill::find($id);
        $data = [
            'title' => $request->title,
            'value' => $request->value,
            'status' => $request->status,
        ];
      
        $getData->update($data); 
        setMessage('success', 'Skill Updated Successfull');
        }catch(Exception $e){
            setMessage('danger', 'Skill Update Faild');
        }  
        return redirect()->route('skill.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id =base64_decode($id);
        $data =  Skill::find($id);   
        $data->delete();
        setMessage('success', 'Skill Has been successfully deleted');
        return redirect()->back();
    }
}
