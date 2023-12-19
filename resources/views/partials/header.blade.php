@php

    $navEl = Config('db.navEl');

@endphp

<div>
    <header>
        <nav class="container d-flex align-items-stretch justify-content-between py-3">

            <a class="navbar-brand" href="/">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
            </a>

            <ul class="nav justify-content-end position-relative ">
                @foreach ($navEl as $el)
                    <li class="nav-item d-flex align-items-center position-relative">
                        <a class="nav-link" href="{{ $el['url'] }}">{{ $el['title'] }}</a>
                        <div class="bt_bar"></div>
                    </li>
                @endforeach
            </ul>

        </nav>
        <div class="jumbotron">

        </div>


    </header>
</div>
