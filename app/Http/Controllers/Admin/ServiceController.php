<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Exception;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allEx = Service::get();
        return view('admin.pages.service.manage', compact('allEx'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.pages.service.create');
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
            'title' => 'required|max:25|min:5|unique:services',
            'desc' => 'required|max:255|min:25',
            'status' => 'size:1',
        ]);
        try{
            Service::create([
            'title' => $request->title,
            'sotrt_desc' => $request->desc,
            'status' => $request->status,
        ]);
        setMessage('success', 'Service HassBeen Added Successfull');
        }catch(Exception $e){
        setMessage('danger', 'Service HassBeen Added Faild');
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
            $getService = Service::find($id);
            return view('admin.pages.service.update', compact('getService'));

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
            'title' => 'required|max:25|min:5',
            'desc' => 'required|max:255|min:25',
            'status' => 'size:1',
        ]);
        try{
        $id = base64_decode($id);
        $getData = Service::find($id);
        $data = [
            'title' => $request->title,
            'sotrt_desc' => $request->desc,
            'status' => $request->status,
        ];
      
        $getData->update($data); 
        setMessage('success', 'Service Updated Successfull');
        }catch(Exception $e){
            setMessage('danger', 'Service Update Faild');
        }  
        return redirect()->route('service.manage');
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
        $data =  Service::find($id);   
        $data->delete();
        setMessage('success', 'Experience Has been successfully deleted');
        return redirect()->back();
    }
}
