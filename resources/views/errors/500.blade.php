@extends('errorlayout')

@section('errormessage')
     <div id="errorinfo">
            <img src="img/500.png" alt="500image">
        <p>
            A mistake was made by our server<br>
            We know about this and are working on a solution
        </p>
        <div id="backbutton">
            <a href="/">Go Home</a>
        </div>
    </div>
@endsection