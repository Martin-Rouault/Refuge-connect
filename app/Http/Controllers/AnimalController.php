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
                "name" => "Coquillette",
                "species" => "Chien",
                "age" => 3,
                "description" => "Une Shiba Inu vive et joyeuse, toujours prête à jouer et à explorer. Coquillette est curieuse, intelligente et très expressive, avec un petit caractère indépendant mais plein de tendresse pour ceux qu’elle aime.",
                "photo" => "/images/animaux/coquillette.png",
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
