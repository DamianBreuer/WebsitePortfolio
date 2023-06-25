@extends('layout')

@section('content')
    <form method ="POST" action="{{route('articles.store')}}">
        @csrf
        <input type="text" name="title" placeholder="Enter Title" required/>
        <div id="foutpreventie-title">
            <p>* Required</p>
        </div>
        <input type="text" name="slug" placeholder="Enter the slug" required/>
        <div id="foutpreventie-slug">
            <p>* Required</p>
        </div>
        <textarea type="text" name="body" placeholder="Enter description" required></textarea>
        <div id="foutpreventie-body">
            <p>* Required</p>
        </div>
        <div id="required-info">
            <p>* In order to submit this article all fields that are 'required' must be filled in.</p>
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection
