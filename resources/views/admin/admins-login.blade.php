@extends('layouts.admin-master')
@section('contents')
@include('layouts.messages')
<div class='ArticAdd form-group'>
    <form action="#" method='post'>
        @csrf
        <label for="Email">Email:</label>
        <input class="form-control" type='email' name='Email'>
        <label for="pass">password:</label>
        <input class="form-control" type='password' name='password'>
        <button style="margin-top:1%;" class="btn btn-danger" type='submit'>Submit</button>
    </form>
</div>
@endsection