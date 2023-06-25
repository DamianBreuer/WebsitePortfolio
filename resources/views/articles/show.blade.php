@extends('layout')

@section('content')
    <main>
        <article>
            <div id="centertext">
                <summary>{{$article -> title}}</summary>
                <h5>{{$article->body}}</h5>
                <a href="{{route('articles.edit', $article->id)}}">Edit Article</a>
                <a href="{{route('articles.index')}}">Go Back</a>
            </div>
        </article>
    </main>

    <form method="POST" action="{{route('articles.destroy', $article['id'])}}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Article</button>
    </form>
@endsection
