<header>
    {{-- first line section --}}
    <section>
        <div class='container d-flex justify-content-end'>
            <span class="d-inline-block me-5">DC POWER 
                <span class="text-top align-top text-uppercase">sm</span>
                VISA
                <i class="fa-regular fa-registered"></i>
            </span>
            <span class="d-inline-block text-uppercase">
                additional dc sites
                <i class="fa-solid fa-caret-down"></i>
            </span>
        </div>
    </section>

    {{-- navbar section --}}
    <section class="navbar">
        <div class="container d-flex justify-content-between align-items-center">
            
            {{-- site logo --}}
            <img src="{{Vite::asset('/resources/images/dc-logo.png')}}" class="img-fluid" alt="">

            {{-- site navbar --}}
            <ul class="flex-grow-1 ms-5">
                {{-- link generator --}}
                @forelse ($menus as $menu)
                    <li>
                        <a href="#" @class([
                             'text-uppercase',
                             'mx-3',
                             'fw-semibold'

                        ])>
                        
                        {{$menu}}
                        @if($loop->last) <i class="fa-solid fa-caret-down"></i> @endif
                    </a>
                    </li>
                @empty
                    <li>Nessun valore presente</li>
                @endforelse
            </ul>

            {{-- search bar --}}
            <div class="d-flex align-items-center justify-content-end search-bar">
                <input type="search" name="item" id="item" placeholder="search">
                <i class="fa-solid fa-magnifying-glass ms-2"></i>
            </div>
        </div>
    </section>

    {{-- jumbotron --}}
    <section class="hero"></section>
</header>