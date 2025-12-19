@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

<h1 class="text-center mb-5 text-4xl font-bold">Nos animaux</h1>
<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6 max-w-7xl m-auto">
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
