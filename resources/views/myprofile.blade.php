@extends('layout')

@section('content')
<main>
    <article>
        <div class="about-me">
            <h1>About me</h1>
            <p>-Name: Damian Breuer<br>
                -Age: 18 Years old<br>
                -Address: Middelburg (At my parents house)<br>
                -Pre-education: Havo, Natuur en Techniek, at Nehalennia
            </p>
        </div>

        <div class="favourite-games">
            <p>
            <h1>Favourite Games</h1>
            -Minecraft<br>
            -Rocket League<br>
            -Call of Duty<br>
            </p>
        </div>

        <div class="besides-school">
            <h1>What do I do besides school?</h1>
            <p>
                -Playing videogames<br>
                -Trying to learn to play keyboard/the guitar<br>
                -Trying to learn to 3D-design<br>
                -Working at De Tamboer in Middelburg<br>
                -Watching series/films
            </p>
        </div>

        <div class="favourite-movies">
            <p>
            <h1>Favourite Movies/Series</h1>
            -The Hobbit/Lord Of The Rings<br>
            -Harry Potter<br>
            -Superhero Movies<br>
            -Fantasy or adventure movies/series<br>
            -Horror movies
            </p>
        </div>

        <img src="img/tamboer.jpg" style="position: relative; width: 500px; height: 200px; top: 0px; left: 400px;" alt="De Tamboer">
        <img src="img/Finished Donut.png" style="position: relative; width: 320px; height: 200px; top: 0px; left: -500px;" alt="Donut">
        <img src="img/minecraft.png" style="position: relative; width: 150px; height: 150px; top: -400px; left: 120px;" alt="Minecraft">
        <img src="img/ring.png" style="position: relative; width: 200px; height: 150px; top: -200px; left: -50px;" alt="LOTR Ring">

        <a href="https://hz.nl/" target="_blank"><img src="img/hz.png" style="position: fixed; width: 165px; height: 45px; left: 25px; top: 695px;" alt="HZ logo"></a>
    </article>
</main>
</body>
</html>

@endsection
