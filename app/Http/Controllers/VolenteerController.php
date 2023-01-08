<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVolenteerRequest;
use App\Models\categorie;
use App\Models\Volenteer;
use Exception;
use PhpParser\Node\Stmt\TryCatch;

class VolenteerController extends Controller
{
    public function volnteer_index(){

        $volenteer=Volenteer::all();
        return view('admin.volenteer.show',['volenteer' =>  $volenteer]);


    }

    //show function 
    public function show_volenteer(){
        $categories = categorie::where('status', '=', 1)->get();
        return view('user.volenteer',['categories'=> $categories]);
    }


    public function upload_volenteer(StoreVolenteerRequest $request){
       
       try {
        $volenteer = new volenteer;
        $volenteer->name = $request->name;
        $volenteer->phone = $request->phone;
        $volenteer->email = $request->email;
        $volenteer->address = $request->address;
        $volenteer->message = $request->message;

        $volenteer->save();
        return redirect()->back()->with('message','تم ارسال الطلب بنجاح ');
       } catch (Exception $th) {
        return redirect()->back()->with('upload_error','لم يتم ارسال الطلب بنجاح ');
       }
   
    }
    public function destroy($id)
    {
        //
        $volenteer= Volenteer::findOrFail($id);
        try{
            $volenteer->delete();
            return redirect('/volnteer_index')->with('success','العنصر تم حذفه');
        }catch(Exception $e){
            return redirect('/volnteer_index')->with('error','العنصر لم يتم حذفه!');
        }
    }

}
