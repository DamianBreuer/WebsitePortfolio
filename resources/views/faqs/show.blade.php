@extends('layout')

@section('content')
    <main>
        <article>
            <div id="centertext">
                <summary>{{$faq -> question}}</summary>
                <h5>{{$faq->answer}}</h5>
                <a href="{{route('faqs.edit', $faq->id)}}">Edit Question/Answer</a>
                <a href="{{route('faqs.index')}}">Go Back</a>
            </div>
        </article>
    </main>

    <form method="POST" action="{{route('faqs.destroy', $faq['id'])}}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Question/Answer</button>
    </form>
@endsection
