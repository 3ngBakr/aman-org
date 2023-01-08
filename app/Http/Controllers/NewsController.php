<?php

namespace App\Http\Controllers;

use App\Models\news;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\News\StoreNewsRequest;
use App\Http\Requests\News\UbdateNewsRequest;
use App\Models\categorie;
use Exception;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $news=news::all();
        return view('admin\news\show',['news' =>  $news]);

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorie=  categorie::where('status','=',1)->get();
        return view('admin.news.add',['categorie'=> $categorie]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsRequest $request)
    {
        $news= new news();
       
        $newImageName = uniqid().'_news_image_'.'.'.$request->news_image->extension();
        $request->news_image->move(public_path('adminassets/img/news_image/'), $newImageName);


        try {
          
            $news->title = $request->title;
            $news->description = $request->description;
            $news->news_image = $newImageName;
            $news->categorie_id=$request->categorie_id;
            
    
            $news->save();
            return redirect()->back()->with('success','    تم الحفظ بنجاح');
            //code...
        } catch (Exception $th) {
            //throw $th;
            return redirect()->back()->with('upload_error',' لم يتم الحفظ بنجاح');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function show(news $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = news::findOrFail($id);
        $categorie=categorie::findOrFail($news->categorie_id)->all();
        return view('admin.news.edit',['news' => $news,'categorie'=>$categorie]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function update(UbdateNewsRequest $request, $id)
    {
        if($request->news_image){
           
            $request->validate([
                'news_image' => 'mimes:jpg'
            ]);
        $news= news ::findOrfail($id); 
        
        $newImageName = uniqid().'_news_image_'.'.'.$request->news_image->extension();
       
        unlink(public_path('adminassets/img/news_image/'.$news->news_image));
        $request->news_image->move(public_path('adminassets/img/news_image/'), $newImageName);
        try {
          
            $news->title = $request->title;
            $news->description = $request->description;
            $news->news_image =$newImageName;
            $news->categorie_id=$request->categorie_id;
            
    
            $news->update();
            return redirect()->back()->with('success','    تم التعديل بنجاح');
            //code...
        } catch (Exception $th) {
            //throw $th;
            return redirect()->back()->with('upload_error',' لم يتم التعديل بنجاح');
        }
    }else{
try{
    $news= news ::findOrfail($id); 
        $news->title = $request->title;
        $news->description = $request->description;
      
        $news->categorie_id=  $news->categorie_id=$request->categorie_id;;
        

        $news->update();
        return redirect()->back()->with('success','    تم التعديل بنجاح');
        //code...
    } catch (Exception $th) {
        //throw $th;
        return redirect()->back()->with('upload_error',' لم يتم التعديل بنجاح');
    }  
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $new= news::findOrFail($id);
        try{
            $new->delete();
            return redirect()->back()->with('success','العنصر تم حذفه');
        }catch(Exception $e){
            return redirect()->back()->with('error','العنصر لم يتم حذفه  !');
        }
        //
    }

    public function changeStatus($id){
        $news = news::select('status')->where('id','=',$id)->first();

        if($news->status == 1){
            $status = '0';
           
        }else{
            $status = '1';
        }
        $values = array('status' => $status);
        news::where('id',$id)->update($values);

        return redirect('/news')->with('success',"الحاله تغيرت");
    }
}
