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
            'link' => 'tv'
        ],
        [
            'title' => 'games',
            'link' => 'games'
        ],
        [
            'title' => 'collectibles',
            'link' => 'collectibles'
        ],
        [
            'title' => 'videos',
            'link' => 'videos'
        ],
        [
            'title' => 'fans',
            'link' => 'fans'
        ],
        [
            'title' => 'news',
            'link' => 'news'
        ],
        [
            'title' => 'shop',
            'link' => 'shop'
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
                    <a class="{{ Route::currentRouteName() === $item['link'] ? 'active' : '' }}" href="{{route( $item['link']) }}">{{ $item['title'] }}</a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>