@extends('errorlayout')

@section('errormessage')
    <div id="errorinfo">
            <img src="img/404.jpg" alt="404image">
        <p>
            It looks like the page you were looking for could<br>
            not be found
        </p>
        <div id="backbutton">
            <a href="/">Go Home</a>
        </div>
    </div>
@endsection