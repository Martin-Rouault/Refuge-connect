@extends('layouts.app')

@section('title', 'Animal ' . $animal['id'])

@section('content')
<h1 @style(['font-size: 36px', 'font-weight: bold', 'margin-bottom: 30px', 'text-align: center'])>{{ $animal->name }}</h1>

<section @style([
    'display: flex',
    'flex-direction: row',
    'justify-content: center',
    'gap: 20px'
])>
        <img @style(['width: 300px']) src="{{ $animal->photo }}" alt="{{ $animal->name }}"></img>
        <article @style(['display: flex', 'flex-direction: column', 'gap: 20px'])>
            <p><span class="font-semibold">Espèce :</span> {{ $animal->species }}</p>
            <p><span class="font-semibold">Âge :</span> {{ $animal->age }}</p>
            <p><span class="font-semibold">Description :</span> {{ $animal->description }}</p>
        </article>
</section>
@endsection

