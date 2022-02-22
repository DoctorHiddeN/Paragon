<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function store(Request $request,Comments $comment)
    {
        $validatedData = $request->validate([
            'body' => ['required'],
            'captcha' => 'required|captcha',
            
        ]);
        ['captcha.captcha'=>'Invalid captcha code.'];
        $comment->articles_id=$request->article_id;
        $comment->user_id=Auth::id();;
        $comment->body=$request->body;
        $comment->flag=0;
        $comment->save();
        $msg="Comment Inserted it will display after Accepting by Admin";
        return back()->with('success',$msg);
    }
    public function index()
    {   
        $comments=Comments::get();
        return view('admin.comments',compact('comments'));
    }
    public function flag(Comments $comment)
    {
       
        if ($comment->flag==0)
        {
            $comment->flag=1;
            $comment->save();
        }elseif($comment->flag==1)
        {
            $comment->flag=0;
            $comment->save();
        }else{
            $msg="something Wrong Happened";
        }
        $msg=" Comment Status Updated";
        return redirect(route('comments'))->with('success',$msg);
    }
    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
    public function test ()
    { 

        // $categories=Categories::with('Articles')->get();
        //     return view('test',compact('categories'));
    }
}
