@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')


<div id="search-container" class="col-md-12">
<h1>Busque um evento</h1>
<form action="/" method="GET">
<div class="row">
<div class="col-md-8">
    <input type="text" id="search" name="search" class="form-control" placeholder="procurar">  
</div>    
<div class="col-md-4">
<input type="submit" value="Procurar" class="btn btn-primary">

</div>
</div>


</form>
</div>
<div id="events-container" class="col-md-12">
@if($search)
<h2>Buscando por: {{ $search }}</h2>
@else
<h2>Próximos eventos</h2>
<p class="subtitle">Veja os eventos dos próximos dias</p>
@endif


<div id="cards-container" class="row">
    @foreach($events as $event)
    <div class="card col-md-3">
        <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
        <div class="card-body">
        <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
        <h5 class="card-title">{{ $event->title }}</h5>
        <p class="card-participants">{{ count($event->users) }} Participantes</p>
        <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
        </div>
    </div>
    @endforeach
    @if(count($events) == 0 && $search) 
        <p>Não há eventos disponíveis com o nome <span style="font-weight:bold">{{ $search }}</span> para ver todos os eventos <span class="backEvents"><a href="/">Volte aqui</a></span></p>

        @elseif(count($events) == 0)
        <p>Não há eventos disponíveis</p>
    @endif

</div>
</div>


    <!-- Comentário teste-->
    {{--Este é um comentario via blade --}}
    @endsection