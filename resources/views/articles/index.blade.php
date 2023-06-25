@extends('layout')

@section('content')
    @foreach($articles as $articleIndex => $article)
        <main>
            <article>
                <div id="centertext">
                    <summary>{{$articleIndex + 1}}. {{$article -> title}}</summary>
                    <h5>{{$article->body}}</h5>
                    <a href="{{route('articles.show', $article->id)}}">Show Article</a>
                </div>
            </article>
        </main>
    @endforeach
@endsection
