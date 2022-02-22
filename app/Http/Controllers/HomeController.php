<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use App\Models\Articles;
use App\Models\Categories;
use Exception;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\TryCatch;

use function PHPUnit\Framework\throwException;

class HomeController extends Controller
{
    public function index(){
        $categories=Categories::get();
        $articles=Articles::where('categories_id',7)->first();
        $services=Articles::where('categories_id',7)->orderby('id')->get();
        return view('index',compact('articles','services','categories'));
    }
    public function show($category,$article)
    {
        $articles=Articles::where('title',$article)->get();
        $comments=Comments::where('flag',1)->get();
        if (count($articles)>=1){
            return view('articlesShow',compact('articles'));
        }else{
            return view('notfound');
        }
        
    }
    public function about(){
        
        return view('about');
    }
    public function api()
    {
        $categories=Categories::all();
        
        return response()->json([['categories'=>$categories]]);
    }
    public function serviceShow($service)
    {
        $services=Articles::where('slug',$service)->get();
        return view('serviceShow',compact('services'));
    }
    public function templates()
    {
        return view('templates');
    }
    public function Category($category)
    {
        $categories=Categories::where('name',$category)->get();
        if (count($categories)>=1){
            return view('categorySelect',compact('categories'));
        }else{
            return view('notfound');
        }
    }
}   
    
