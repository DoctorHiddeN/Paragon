@extends('layouts.admin-master')
@section('contents')

<h1 class="head-tit"> Articles List </h1>

<div class="Article container pt-3">
  @include('layouts.messages')
  <a style="margin-bottom: 1%" href='{{route('articles-add')}}' class="btn btn-success">Add New Article</a>
<table class="table table-hover table-dark">
    <thead>
      <tr>
        <th class="col-sm-1" scope="col">id</th>
        <th class="col-sm-1" scope="col">Title</th>
        <th class="col-sm-1" scope="col">Options</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($articles as $article)
      <tr class="col-sm-1">
        <th scope="row">{{$article->id}}</th>
        <td>{{$article->title}}</td>
        <td>
          <div class="fm-cont" style="display:inline-block">
            <a class="btn btn-danger" style="display:inline-block" href="{{route('artdelete',$article->id)}}"  onclick="return confirm('Are you sure to delete this Article ?');">Delete</a>
            <a class="btn btn-danger" style="display:inline-block" href="{{route('artedit',$article->id)}}">Edit</a>
        </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection