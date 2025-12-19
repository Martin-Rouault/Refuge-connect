@extends('layouts.app')

@section('title', 'Animal ' . $animal['id'])

@section('content')
      <x-animal
        :id="$animal->id"
        :photo="$animal->photo"
        :name="$animal->name"
        :species="$animal->species"
        :age="$animal->age"
        :description="$animal->description"
    />
@endsection

