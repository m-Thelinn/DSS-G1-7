@extends('layouts.app')

@section('content')



<div class = "text">
<h1>{{ $team->name }}</h1>
<h2>-- {{ $team->short_name }} --</h2>
<p>{{ $team->description }}</p>
<p>Victorias: {{ $teamstat->wins }}</p>
<p>Derrotas: {{ $teamstat->losses }}</p>
<p>Posición en el ranking: {{ $teamstat->ranking_position }}</p>
<p>Tasa de victorias: {{ $teamstat->win_rate }}</p>
<p>Tasa de derrotas: {{ $teamstat->lose_rate }}</p>
<a class="btn-admin" href="{{ route('team.showAllTeams') }}">Atrás</a>
</div>

@endsection