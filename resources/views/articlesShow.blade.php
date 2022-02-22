@extends('layouts.master')
@section('contents')
@include('layouts.messages')

@foreach ($articles as $article)
<h1 id="art-title">{{$article->title}}</h1>
<div class="article-Container">
<div class="article-image">
    <img src="/images/{{$article->thumbnail}}">
</div>
<div class="main-article">

<h2>{{$article->description}}</h2>
<p>{{$article->body}}</p>
</div>
</div>
@endforeach 



{{-- @if (Auth::check())
<div class="comment-insert">
    @include('layouts.comments')
</div>
@endif --}}
{{-- <div class="comments">
    <h3>Comments For This Article:</h3>
    @foreach($comments as $comment)
    <div class="comment">
        <label for="comment">{{$comment->User->email}}</label>
        <h6>{{$comment->body}}</h6>
    </div>
    @endforeach
</div> --}}
@endsection 
