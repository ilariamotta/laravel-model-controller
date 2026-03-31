@extends("layouts.master")

@section("contenuto")
    <ul>
        @foreach ($movies as $movie)
            <li>
                {{ $movie['title'] }}
            </li>
        @endforeach
    </ul>
@endsection