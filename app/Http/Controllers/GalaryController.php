<?php

namespace App\Http\Controllers;

use App\Models\Galary;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $image=galary::all();


        return view('admin.galary.show',['image' =>  $image]);
    }

    /**
     * Show the form for creating a image resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galary.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Galary();
        $store->title = $request->title;

       $image=$request->galary_image;

       $imagename=time().'.'.$image->getClientOriginalExtension();

       $request->galary_image->move('adminassets/img/galaryimage/',$imagename);
       $store->image=$imagename;
       
       $store->save();



        return redirect()->back()->with('success','    تم الحفظ بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galary  $galary
     * @return \Illuminate\Http\Response
     */
    public function show(Galary $galary)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galary  $galary
     * @return \Illuminate\Http\Response
     */
    public function edit(Galary $galary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galary  $galary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galary $galary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galary  $galary
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galary= galary::findOrFail($id);
        
            $galary->delete();
            return redirect()->back()->with('success','العنصر تم حذفه');
   
      
    }
}
