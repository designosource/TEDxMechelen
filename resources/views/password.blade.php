@extends('layouts.main')

@section('content')
    <div class="maxwidth">
    <form action="/vrijwilliger/validate" method="POST">
        {{ csrf_field() }}
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Submit" class="btn btn-regular btn-l btn-submit">
    </form>
    </div>
@endsection