@extends ('layouts.main')

@section('titulo','Eventos')
@section ('content')

<div class="container">
    <h1>Meus Eventos</h1>
        <ul>
            @foreach($events as $event)
                <li> <a href="/events/{{ $event->id }}"> {{ $event->titulo }}</a></li>
            @endforeach
        </ul>


@endsection
