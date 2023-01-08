<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreCategorieRequest;
use App\Models\categorie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorie=categorie::all();
        return view('admin.categorie.show',['categorie' =>  $categorie]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.categorie.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategorieRequest $request)
    {
        $categorie=new categorie();
        try {
          
            $categorie->name = $request->name;
           
            
    
            $categorie->save();
            return redirect()->back()->with('success','    تم الحفظ بنجاح');
            //code...
        } catch (Exception $th) {
            //throw $th;
            return redirect()->back()->with('upload_error',' لم يتم الحفظ بنجاح');
        }
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = categorie::findOrFail($id);
        return view('admin.categorie.edit',['categorie' => $categorie]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategorieRequest $request, $id)
    {
        $categorie=categorie::findOrfail($id);
        try {
          
            $categorie->name = $request->name;
           
            
    
            $categorie->update();
            return redirect()->back()->with('success','    تم التعديل بنجاح');
            //code...
        } catch (Exception $th) {
            //throw $th;
            return redirect()->back()->with('upload_error',' لم يتم التعديل بنجاح');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie= categorie::findOrFail($id);
        try{
            $categorie->delete();
            return redirect()->back()->with('success','العنصر تم حذفه');
        }catch(Exception $e){
            return redirect()->back()->with('error','العنصر لم يتم حذفه  !');
        }
        //
    }
    public function changeStatus($id){
        $categorie = categorie::select('status')->where('id','=',$id)->first();

        if($categorie->status == 1){
            $status = '0';
           
        }else{
            $status = '1';
        }
        $values = array('status' => $status);
        categorie::where('id',$id)->update($values);

        return redirect('/categorie')->with('success',"الحاله تغيرت");
    }
}
