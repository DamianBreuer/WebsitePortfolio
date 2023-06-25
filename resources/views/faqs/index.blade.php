@extends('layout')

@section('content')
    <main>
        <article>
            <div id="centertext">
            <h1>Here are some questions that are asked frequently:</h1>
            <h2>
                <details style="margin-bottom: 35px;">
                    <summary>How can you print a document from your laptop at HZ?</summary>
                    <h5>In the copyroom with your HZ pass.</h5>
                </details>
                <details style="margin-bottom: 35px;">
                    <summary>How can you scan a document and send it to your laptop at HZ?</summary>
                    <h5>With the printers in the copyroom you can scan a document with your HZ pass. The scan will be send to your email as a PDF.</h5>
                </details>
                <details style="margin-bottom: 35px;">
                    <summary>What do you need to do when you are sick or show symptoms of the coronavirus?</summary>
                    <h5>Send your teacher a message and follow the class online if possible.</h5>
                </details>
                <details style="margin-bottom: 35px;">
                    <summary>How can you book a projectspace in one of the wings?</summary>
                    <h5>Through the selfservice portal at the HZportal you can easily book a projectspace.</h5>
                </details>
                <details style="margin-bottom: 35px;">
                    <summary>What are the instructions if you want to park your car at the HZ parking lot?</summary>
                    <h5>With the HZ pass the barrier will open/close.</h5>
                </details>
            </h2>

            <a href="https://hz.nl/" target="_blank"><img src="img/hz.png" style="position: fixed; width: 165px; height: 45px; left: 25px; top: 695px;" alt="HZ logo"></a>
            </div>

    @foreach($faqs as $faqIndex => $faq)
                <details>
                    <summary>{{$faqIndex + 1}}. {{$faq -> question}}</summary>
                    <h3>{{$faq->answer}}</h3>
                    <a href="{{route('faqs.show', $faq->id)}}">Show Faq</a>
                </details>
                    </div>
            </article>
        </main>
    @endforeach

@endsection

