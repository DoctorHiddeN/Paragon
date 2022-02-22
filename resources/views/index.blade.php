@extends('layouts.master')

@section('contents')
@include('layouts.headsec')
@include('layouts.about')
@include('layouts.show-off')
@include('layouts.services')
@include('layouts.slider')
<div class="first_service">
    <div class="first_servtext">
        <h3>{{$articles->title}}</h3>
        <p>{{$articles->body}}</p>
    </div>
    <div class="first_servimg">
        <img src="/images/{{$articles->thumbnail}}">
    </div>
</div>
<form action={{route('logout')}} method="POST">
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</form>
@include('layouts.footer')
@endsection