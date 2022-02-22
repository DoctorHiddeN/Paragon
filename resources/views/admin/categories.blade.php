@extends('layouts.admin-master')
@section('contents')
{{-- @foreach($categories as $cate)
{{$cate->id}}
@endforeach --}}
<h1 class="head-tit"> Categories List </h1>

<div class="Article container pt-3">
  @include('layouts.messages')
  <a style="margin-bottom: 1%" href='{{route('categories-add')}}' class="btn btn-success">Add New Category</a>
<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th class="col-sm-1" scope="col">id</th>
        <th class="col-sm-1" scope="col">Name</th>
        <th class="col-sm-1" scope="col">Description</th>
        <th class="col-sm-1" scope="col">Options</th>
      </tr>
    </thead>
    <tbody>
@foreach($categories as $cate)
        <tr class="col-sm-1">
        <td>{{$cate->id}}</td>
        <td>{{$cate->name}}</td>
        <td>{{$cate->description}}</td>
        <td>
          <div class="fm-cont" style="display:inline-block">
            <a class="btn btn-danger" style="display:inline-block" href="{{route('catdelete',$cate->id)}}"  onclick="return confirm('Are you sure to delete this Category ?');">Delete</a>
        </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection