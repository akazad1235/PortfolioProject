<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $getHome =  Home::get();
        return view('admin.pages.home.home', compact('getHome'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $image    = $request->file('bgImage');
        $images    = $request->file('image');
        $fileName = rand(0, 999999999) . '_' . date('Ymdhis') . '_' . rand(99999, 999999999) . '.' . $image->getClientOriginalExtension();
        $fileNames = rand(0, 999999999) . '_' . date('Ymdhis') . '_' . rand(99999, 999999999) . '.' . $images->getClientOriginalExtension();
        if ($image->isValid()) {
            if ($image->getMimeType() === "image/png" || $image->getMimeType() === "image/jpeg" ) {
                $image->storeAs('home', $fileName);
                

        }
         if ($images->getMimeType() === "image/png" || $images->getMimeType() === "image/jpeg" ) {
                $images->storeAs('home', $fileNames);
               

        }

        
    }else{
        return redirect()->back();
    }

    Home::create([
        'name' => $request->name,
        'designation' => $request->designation,
        'desc' => $request->desc,
        'bg_image' => $fileName,
        'image' => $fileNames,
    ]);

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
        $homeId =  Home::find($id);
        return view('admin.pages.home.update', compact('homeId'));
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
        $getData =  Home::find($id);
         $image    = $request->file('image');
         $images    = $request->file('images');
           if ($image !=null)  {

        $fileName = rand(0, 999999999) . '_' . date('Ymdhis') . '_' . rand(99999, 999999999) . '.' . $image->getClientOriginalExtension();
        $fileNames = rand(0, 999999999) . '_' . date('Ymdhis') . '_' . rand(99999, 999999999) . '.' . $images->getClientOriginalExtension();    
                if ($image->isValid() ||$images->isValid() ) {
                if ($image->getMimeType() === "image/png" || $image->getMimeType() === "image/jpeg") {
                     $image->storeAs('home', $fileName);
                   unlink(('public/admin/images/home/' . $getData->bg_image));

                      $getData->update([
                        'bg_image' => $fileName,
                    ]);
                }
                if ($images->getMimeType() === "image/png" || $images->getMimeType() === "image/jpeg") {
                     $images->storeAs('home', $fileNames);
                    unlink(('public/admin/images/home/' . $getData->image));

                      $getData->update([
                        'image' => $fileNames,
                    ]);
                }

                }
        $getData->update([
        'name'    => $request->name,
        'designation'    => $request->designation,
        'bg_image'    => $fileName,
        'image'    => $fileNames,
        'desc'    => $request->desc,
        ]);
            }else{
   
        $getData->update([
         'name'    => $request->name,
        'designation'    => $request->designation,
        'desc'    => $request->desc,
        ]);
           }
        setMessage('success', 'Brand Has Been Successfully Added'); 
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
        //
    }
}
