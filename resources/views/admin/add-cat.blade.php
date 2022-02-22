@extends('layouts.admin-master')
@section('contents')
@include('layouts.messages')
<div class='ArticAdd form-group'>
    <form action="{{route('catadd')}}" method='post'>
        @csrf
        <label for="Name">Name:</label>
        <input class="form-control" type='text' name='name'>
        <label for="description">Description:</label>
        <input class="form-control" type='text' name='description'>
        <button style="margin-top:1%;" class="btn btn-danger" type='submit'>Submit</button>
    </form>
</div>
@endsection