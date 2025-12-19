@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

<h1 @style([
    'text-align: center',
    'margin-bottom: 3rem',
    'font-size: 2.25rem',
    'font-weight: 700'
])>
    Nos animaux
</h1>

<section @style([
    'display: grid',
    'grid-template-columns: repeat(auto-fit, minmax(320px, 1fr))',
    'gap: 1.5rem',
    'padding: 1.5rem',
    'max-width: 1280px',
    'margin: 0 auto'
])>
    @foreach ($animals as $animal)
        <x-animal
            :id="$animal->id"
            :photo="$animal->photo"
            :name="$animal->name"
            :species="$animal->species"
            :age="$animal->age"
            :description="$animal->description"
        />
    @endforeach
</section>

@endsection
