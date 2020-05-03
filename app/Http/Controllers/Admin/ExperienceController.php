<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exprerience;
use Exception;
use Psy\ExecutionLoop;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $allEx = Exprerience::get();
        return view('admin.pages.experience.manage', compact('allEx'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.pages.experience.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       try{
         $data = [
            'tag' => $request->tag_name,
            'status' => $request->status,
            
        ];
        Exprerience::create($data);
        setMessage('success', 'Experience Added Successfull');
       }catch(Exception $e){
        setMessage('danger', 'Experience Added Faild');
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

       $id =base64_decode($id);
       $data = Exprerience::find($id);
       return view('admin.pages.experience.update', compact('data'));
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
            'tag' => 'required|max:25|min:5',
            'status' => 'size:1',
        ]);
        try{
        $id = base64_decode($id);
        $getData = Exprerience::find($id);
        $data = [
            'tag' => $request->tag,
            'status' => $request->status,
        ];
        $getData->update($data); 
        setMessage('success', 'Experience Updated Successfull');
        }catch(Exception $e){
            setMessage('danger', 'Experience Update Faild');
        }  
        return redirect()->route('experience.manage');
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
        $data =  Exprerience::find($id);   
        $data->delete();
        setMessage('success', 'Experience Has been successfully deleted');
        return redirect()->back();
    }
}
