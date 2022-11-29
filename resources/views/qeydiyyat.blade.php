@extends('dizayn.app')

@section('title')
  QEYDIYYAT
@endsection



@section('qeydiyyat')

<h2> QEYDIYYAT </h2>

<form method="post">
    Name:<br>
    <input type="text" name="name"><br>
    Surename:<br>
    <input type="text" name="surename"><br>
    Email:<br>
    <input type="email" name="email"><br>
    Password:<br>
    <input type="password" name="password"><br>
    <button type="submit">Insert</button>
</form>


@endsection