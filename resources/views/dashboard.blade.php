@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')


<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1 class="display-3">Meus Eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($events) > 0)
    
    @else

    <p>{{ $eventOwner['name']}}Você ainda não tem eventos, <a href="/events/create">Criar Evento</a></p>
</div>

@endsection