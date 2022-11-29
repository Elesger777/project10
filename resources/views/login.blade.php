@extends('dizayn.app')

@section('title')
  LOGIN
@endsection

@section('login')

<h2> LOGIN </h2>

<form method="post">
    Email:<br>
    <input type="email" name="email"><br>
    Password:<br>
    <input type="password" name="password"><br>
    <button type="submit">Insert</button>
</form>


@endsection