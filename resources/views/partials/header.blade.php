<header @style([
    'padding: 1.25rem', {{-- Équivalent p-5 --}}
    'display: flex',
    'justify-content: space-around',
    'align-items: center',
])>
    <img src="{{ asset('../images/logo.png') }}" alt="Logo" @style([
        'width: 256px',
    ]) />

    <nav @style([
        'display: flex',
        'gap: 1.25rem',
    ])>
        <a href="/" @style([
            'text-decoration: none',
            'color: inherit',
            'font-weight: 500'
        ])>
            Accueil
        </a>
        <a href="{{ route('animals.create') }}" @style([
            'text-decoration: none',
            'color: inherit',
            'font-weight: 500'
        ])>
            Ajouter un animal
        </a>
    </nav>
</header>
