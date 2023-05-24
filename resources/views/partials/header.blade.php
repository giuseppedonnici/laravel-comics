@php
    $menu = [
        [
            'title' => 'characters',
            'link' => 'characters'
        ],
        [
            'title' => 'comics',
            'link' => 'comics'
        ],
        [
            'title' => 'movies',
            'link' => 'movies'
        ],
        [
            'title' => 'tv',
            'link' => 'home'
        ],
        [
            'title' => 'games',
            'link' => 'home'
        ],
        [
            'title' => 'collectibles',
            'link' => 'home'
        ],
        [
            'title' => 'videos',
            'link' => 'home'
        ],
        [
            'title' => 'fans',
            'link' => 'home'
        ],
        [
            'title' => 'news',
            'link' => 'home'
        ],
        [
            'title' => 'shop',
            'link' => 'home'
        ],
    ];
@endphp

<header>
    <div class="container my-4">
        <nav class="nav-bar d-flex justify-content-between align-items-center">
            <a href="{{url('/')}}">
                <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="logo image">
            </a>
            <ul class="w-100 list-unstyled d-flex justify-content-around">
                @foreach ($menu as $item)
                <li class="text-uppercase">
                    <a href="{{route( $item['link']) }}">{{ $item['title'] }}</a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>