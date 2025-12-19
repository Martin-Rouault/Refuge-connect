<article @style([
    'background-color: #ffffff',
    'border-radius: 20px',
    'padding: 15px',
    'box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05)',
    'text-align: left',
])>
    <a href="{{ route('animal.details', ['id' => $id]) }}">
        <img src="{{ asset($photo) }}" alt="{{ $name }}" @style([
            'border-radius: 16px',
            'width: 300px',
            'object-fit: cover'
        ]) />
    </a>

    <h2 @style([
        'font-size: 1.25rem',
        'font-weight: 700',
        'margin-top: 10px',
        'margin-bottom: 5px',
    ])>
        {{ $name }}
    </h2>

    <p @style(['margin: 4px 0', 'font-size: 14px'])>
        <span @style(['font-weight: 600'])>Espèce :</span> {{ $species }}
    </p>

    <p @style(['margin: 4px 0', 'font-size: 14px'])>
        <span @style(['font-weight: 600'])>Âge :</span> {{ $age }}
    </p>

    <p @style(['margin: 4px 0', 'font-size: 14px', 'max-width: 300px'])>
        <span @style(['font-weight: 600'])>Description :</span> {{ $description }}
    </p>

    <div @style([
        'margin-top: 16px',
        'display: flex',
        'align-items: center',
        'gap: 16px',
    ])>
        <a href="{{ route('animals.update', ['id' => $id]) }}" @style([
            'color: #52c9ff',
            'text-decoration: none',
            'font-weight: 500',
        ])>
            Modifier
        </a>

        <a href="{{ route('animals.delete', ['id' => $id]) }}" @style([
            'color: #52c9ff',
            'text-decoration: none',
            'font-weight: 500',
        ])>
            Supprimer
        </a>
    </div>
</article>
