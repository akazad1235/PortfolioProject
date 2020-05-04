<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projectcategory;

class CategoryProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getdata =  Projectcategory::get();
        return view('admin.pages.projectcategory.manage', compact('getdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.projectcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'category_name' => $request->category_name,
            'category_slug' => $request->category_name,
            'status' => $request->status,
        ];
        Projectcategory::create($data);
        setMessage('success', 'Project Category Added Success');
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
        $getData = Projectcategory::find($id);
        return view('admin.pages.projectcategory.update',compact('getData'));
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
             $id = base64_decode($id);
            $data = Projectcategory::find($id);
            $data->update([
                'category_name' => $request->category_name,
                'category_slug' => $request->category_name,
                'status' => $request->status,
            ]);

        setMessage('success', 'Project Category Update Successfull');
         return redirect()->back();
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
        $data =  Projectcategory::find($id);   
        $data->delete();
        setMessage('success', 'Project Category Has been successfully deleted');
        return redirect()->back();
    }
}
