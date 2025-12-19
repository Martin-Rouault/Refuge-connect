<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function show($id)
    {
        $animal = Animal::findOrFail($id);
        return view('pages.animal-details', ['animal' => $animal]);
    }

    public function create()
    {
        Animal::upsert([
            [
                "name" => "Bella",
                "species" => "Chien",
                "age" => 5,
                "description" => "Une labrador joueuse et affectueuse qui adore la compagnie.",
                "photo" => "/images/animaux/bella.png",
            ],
            [
                "name" => "Luna",
                "species" => "Chat",
                "age" => 3,
                "description" => "Une chatte calme et câline qui aime les endroits tranquilles.",
                "photo" => "/images/animaux/luna.png",
            ],
            [
                "name" => "Max",
                "species" => "Chien",
                "age" => 2,
                "description" => "Un jeune chiot plein d’énergie qui adore courir et jouer dehors.",
                "photo" => "/images/animaux/max.png",
            ],
        ], uniqueBy: ['name', 'species', 'age', 'description', 'photo']);

        return redirect()->route('home');
    }

    public function update($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->update(['name' => $animal['name'] . ' modifié']);
        return redirect()->route('home');
    }


    public function delete($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();
        return redirect()->route('home');
    }
}
