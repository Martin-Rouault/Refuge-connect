@extends('layouts.app')

@section('title', 'Animal ' . $animal['id'])

@section('content')
<h1 @style(['font-size: 36px', 'font-weight: bold', 'margin-bottom: 30px', 'text-align: center'])>{{ $animal->name }}</h1>

<section @style([
    'display: flex',
    'flex-direction: row',
    'margin: 0 auto',
    'gap: 20px',
    'max-width: 880px'
])>
        <img @style(['width: 300px']) src="{{ asset($animal->photo) }}" alt="{{ $animal->name }}"></img>
        <article @style(['display: flex', 'flex-direction: column', 'gap: 50px'])>
            <p @style(['font-size: 20px'])><span>Espèce :</span> {{ $animal->species }}</p>
            <p @style(['font-size: 20px'])><span>Age :</span> {{ $animal->age }} ans</p>
            <p @style(['font-size: 20px'])><span></span> {{ $animal->description }}</p>
        </article>
</section>
@endsection

