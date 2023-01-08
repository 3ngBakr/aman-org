<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreServies_numberRequest;
use App\Models\Servies_number;
use Exception;
class Servies_NumberController extends Controller
{
    public function index()
    {
        $number=  Servies_number::all();
       
return view('admin.servies_number.show',['number'=>$number]);

        //
    }   
    public function create()
    {
        
        //
        return view('admin.servies_number.add');
    }


      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServies_numberRequest $request){
        $number= new Servies_number();
       try{
            $number->name=$request->name;
            $number->number=$request->number;
            $number->save();
          
            return redirect()->back()->with('success','    تم الحفظ بنجاح');
            //code...
        } catch (Exception $th) {
            //throw $th;
            return redirect()->back()->with('upload_error',' لم يتم الحفظ بنجاح');
        }



    }

    public function edit($id)
    {
        $number = Servies_number::findOrFail($id);
        return view('admin.servies_number.edit',['number' => $number]);
        //
    }

    public function update(StoreServies_numberRequest $request, $id)
    {
        $number=Servies_number::findOrfail($id);
        try {
          
            $number->name = $request->name;
           
            $number->number = $request->number;
    
            $number->update();
            return redirect()->back()->with('success','    تم التعديل بنجاح');
            //code...
        } catch (Exception $th) {
            //throw $th;
            return redirect()->back()->with('upload_error',' لم يتم التعديل بنجاح');
        }
    }

    public function destroy($id)
    {
        $number=Servies_number::findOrFail($id);
        try{
            $number->delete();
            return redirect()->back()->with('success','العنصر تم حذفه');
        }catch(Exception $e){
            return redirect()->back()->with('error','العنصر لم يتم حذفه  !');
        }
        //
    }
      
    //
}
