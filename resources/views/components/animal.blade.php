@props(['id', 'photo', 'name', 'species', 'age', 'description'])

<article class="bg-white rounded-[20px] p-2.5 shadow-sm">
    <a href="{{ route('animal.details', ['id' => $id]) }}">
        <img src="{{ $photo }}" alt="{{ $name }}" class="rounded-2xl" />
    </a>

    <h2 class="text-xl font-bold mt-2">{{ $name }}</h2>

        <p><span class="font-semibold">Espèce :</span> {{ $species }}</p>
        <p><span class="font-semibold">Âge :</span> {{ $age }}</p>
        <p><span class="font-semibold">Description :</span> {{ $description }}</p>

    <div class="mt-4 flex items-center gap-4">
        <a href="{{ route('animals.update', ['id' => $id ]) }}"
           class="text-[#52c9ff] no-underline font-medium">
            Modifier
        </a>
        <a href="{{ route('animals.delete', ['id' => $id ]) }}"
           class="text-[#52c9ff] no-underline font-medium">
            Supprimer
        </a>
    </div>
</article>
