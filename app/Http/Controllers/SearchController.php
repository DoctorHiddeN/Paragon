<?php

namespace App\Http\Controllers;

use AddCategoryToArticles;
use App\Models\Articles;
use App\Models\Categories;
use Illuminate\Http\Request;


class SearchController extends Controller
{

    public function result(Request $request)
    
    {
        if (isset($request->search_val)){

       
            $articles=Articles::Where('body', 'like', '%' . $request->search_val . '%')->get();
            $categories=Categories::Where('name', 'like', '%' . $request->search_val . '%')->get();
            if (count($articles) >=1 or count($categories) >=1 )
            {
                return view('result',compact('articles','categories'));
            }else{
                return view('notfound');
            }
        
        }else{
            return back();
        }
    }
}
