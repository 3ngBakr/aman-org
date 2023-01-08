<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\categorie;
use App\Models\Galary;
use App\Models\news;
use App\Models\Servies_number;
use Illuminate\Http\Request;


class News_frontendController extends Controller
{
    public function get_News()
    {
        $categories = categorie::where('status', '=', 1)->get();
        $news = news::where('status', '=', 1)->get();
        return view('user.news', ['news_all' => $news,'categories'=>$categories]);
    }
    // public function get_Categories(){


    //     return view('user.home',['categories'=>$news]);


    //         }


    public function get_singleNews($id)
    {
        $categories = categorie::where('status', '=', 1)->get();

        $singleNews = news::findOrFail($id);
        return view('user.single_news', ['singleNews' => $singleNews,'categories'=>$categories]);
    }
    public function hero_News()
    {
        

        $news = news::where('status', '=', 1)->limit(3)->get();
        $number =  Servies_number::all();


        $categories = categorie::where('status', '=', 1)->get();

        return view('user.home', ['lastNews' => $news, 'number' => $number, 'categories' => $categories]);
    }



    public function getCategoryNews(categorie $category)
    {
        
     $categories = categorie::where('status', '=', 1)->get();
     $news= $category->news()->where('status', '=', 1)->get();

    return view('user.health', [  'news' => $news,'categories'=> $categories]);
    //
    }
}
