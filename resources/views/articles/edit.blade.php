@extends('layout')

@section('content')
    <form method ="POST" action="{{route('articles.update', $article['id'])}}">
        @csrf
        @method('PUT')
        <input type="text"name="title" value="{{$article->title}}" required/>
        <input type="text"name="slug" value="{{$article->title}}" required/>
        <textarea type="text" name="body">{{$article->body}}</textarea>
        <button type="submit">Submit</button>
    </form>
@endsection
