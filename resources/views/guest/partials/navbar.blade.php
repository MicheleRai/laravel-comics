<nav>
    <ul class="header-text">

        @foreach ($menu as $item)
            <li><a href="{{route($item['route'])}}">{{ $item['label'] }}</a></li>

        @endforeach

    </ul>
</nav>
