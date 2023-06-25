@extends('layout')

@section('content')
    <form method ="POST" action="{{route('faqs.update', $faq['id'])}}">
        @csrf
        @method('PUT')
        <input type="text"name="question" value="{{$faq->question}}" required/>
        <input type="text"name="answer" value="{{$faq->answer}}" required/>
        <input type="text"name="link" value="{{$faq->link}}">
        <button type="submit">Submit</button>
    </form>
@endsection
