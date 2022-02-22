<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Http\Requests\StoreArticlesRequest;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function catList()
    {
        $categories=Categories::get();
        return view('admin.categories',compact('categories'));
    }
    public function destroy(Categories $categories)
    {
        $categories->delete();
        $msg='Article Deleted Successfuly';
        return redirect(route('catList'))->with('success',$msg);
    }
    public function create()
    {
        return view('admin.add-cat');
    }
    public function store(StoreArticlesRequest $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'unique:Categories', 'max:255'],
            'description' => ['required'],
        ]);
        $categories=new Categories();
        $categories->create($request->all());
        $msg="New Category Created";

        return back()->with('success',$msg);
    }
    
}
