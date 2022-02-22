@extends('layouts.admin-master')
@section('contents')

<h1 class="head-tit"> Comments Pannel </h1>

<div class="Article container pt-3">
  @include('layouts.messages')
<table class="table table-hover table-dark">
    <thead>
      <tr>
        <th class="col-sm-1" scope="col">id</th>
        <th class="col-sm-1" scope="col">Article</th>
        <th class="col-sm-1" scope="col">User</th>
        <th class="col-sm-1" scope="col">Comment</th>
        <th class="col-sm-1" scope="col">->Status<-</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($comments as $comment)
      <tr class="col-sm-1">
        <th scope="row">{{$comment->id}}</th>
        <td>{{$comment->Articles->title}}</td>
        <td>{{$comment->User->email}}</td>
        <td>{{$comment->body}}</td>
        <td><a href="{{route('cm-flag',$comment->id)}}">{{$comment->flag}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection