@extends ('layouts.main')

@section('title','PRIMES Eventos')
@section ('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form  class="pesquisa" action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procure um evento">
        <button type="submit" class="btn-pesquisa ">Buscar</button>
    </form>
</div>
<div id="events-container" class="col-md-12">
    @if ($search)
    <h2>Buscando por: {{$search}}</h2>
@else
 <h2>Próximos Eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias:</p>
@endif
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class=" card col-md-3">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->titulo }}">
            <div class="card-body">
                <p class="card-date">{{date('d/m/Y', strtotime($event->date)) }}</p>
                <h5 class="card-title">{{ $event->titulo }}</h5>
                <p class="card-descricao">{{ $event->descricao }}</p>
                <p class="card-participants">X Participantes</p>
                <a href="/events/{{$event->id}}" class="btn btn-primary">Saber mais</a>
        </div>
        </div>
        @endforeach
        @if (count($events)== 0 && $search)
        <p>Não foi póssivel encontrar nenhum evento com {{$search}}.</p>
        <p><a href="/"> Ver todos os eventos!</a> </p>
        @elseif (count($events)== 0 )
            <p>Não há eventos disponíveis</p>
        @endif
    </div>
</div>

@endsection
