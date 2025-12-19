<header class="p-5 flex justify-around items-center">
    <img src="{{ asset('../images/logo.png') }}" class="w-3xs"></img>
    <nav class="flex gap-5">
        <a href="/">Accueil</a>
        <a href="{{ route('animals.create') }}">Ajouter un animal</a>
    </nav>
</header>
