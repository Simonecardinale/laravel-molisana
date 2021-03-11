<header>
    <div class="container-header">
        <div class="container-img">
            <img class="header-img" src="https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png" alt="">
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('pagina-home') }}" class="{{ Request::route() -> getName() == ('pagina-home') ? 'active' : '' }}">
                    Home
                </a></li>
                <li><a href="{{ route('pagina-prodotti') }}" class="{{ Request::route() -> getName() == ('pagina-prodotti') ? 'active' : '' }}">Prodotti</a></li>
                <li><a href="{{ route('pagina-news') }}" class="{{ Request::route() -> getName() == ('pagina-news') ? 'active' : '' }}">News</a></li>
            </ul>
        </nav>
    </div>
</header>
