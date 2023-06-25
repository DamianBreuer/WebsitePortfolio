@extends('layout')

@section('content')
    <form method ="POST" action="{{route('faqs.store')}}">
        @csrf
        <input type="text"name="question" required/>
        <input type="text"name="answer" required/>
        <input type="text"name="link">
        <button type="submit">Submit</button>
    </form>
@endsection
