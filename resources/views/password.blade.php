@extends('layouts.main')

@section('content')
    <form action="/vrijwilliger/validate" method="POST">
        {{ csrf_field() }}
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Submit">
    </form>
@endsection