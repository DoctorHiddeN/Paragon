<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreArticlesRequest;
use App\Models\Articles;
use App\Models\artimages;
use App\Models\Categories;
use Illuminate\Contracts\Cache\Store;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles=Articles::orderBy('id','Desc')->get();
        return view('admin.articles',compact('articles'));
    }
    public function delete($id)
    {
        $article = Articles::findOrFail($id);

        $article->delete();

        return view('admin.articles');
    }
    public function show(Articles $slug)
    {
        return view('layouts.articlesShow',compact('articles'));
    }
    public function create()
    {
        return view('admin.articles-add');
    }
    public function store(StoreArticlesRequest $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'unique:Articles', 'max:255'],
            'slug' => ['required', 'unique:Articles', 'max:255'],
            'description' => ['required'],
            'body' => ['required'],
        ]);
        $articles=new Articles();
        $articles->create($request->all());
        $msg="New Article Created";

        return back()->with('success',$msg);
    }
    public function destroy(Articles $article)
    {
        $article->delete();
        $msg='Article Deleted Successfuly';
        return redirect(route('articles-list'))->with('success',$msg);
    }
    public function edit(Articles $article)
    {
        $categories=Categories::get();
        return view('admin.articles-update',compact('article','categories'));
    }
    public function update(StoreArticlesRequest $request,Articles $article)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:255'],
            'slug' => ['required',  'max:255'],
            'body' => ['required'],
            'categories_id'=>['required']
        ]);
        $article->update($request->all());
        $article->categories_id=$request->categories_id;
        $article->save();
        $msg=" Article Updated";
        return redirect(route('articles-list'))->with('success',$msg);
    }
    public function upImages(StoreArticlesRequest $request,Articles $article,artimages $artimages)
    {
        if( $request->hasFile( 'name' ) ) {
            $destinationPath = public_path('images');
            $file = $request->name;
            $fileName = time() . '.'.$file->getClientOriginalExtension();
            $file->move( $destinationPath, $fileName );
            $artimages->name = $fileName;
            $artimages->alt=$request->get('alt');
            $artimages->articles_id=$request->get('article_id');
            $artimages->save();
        }
        return back()
        ->with('success','You have successfully upload image.');
    }
    public function thumbnail(StoreArticlesRequest $request,Articles $article)
    {
        $article=Articles::find($request->articles_id);
        $article->thumbnail=$request->thumbnail;
        $article->save();
        $msg=" thumbnail Updated successfully";
        return back()->with('success',$msg);
    }
    public function test ()
    { 
        return view('test');
    }
    public function testshow($test1,$test2)
    {
        echo $test1.$test2;
    }
}