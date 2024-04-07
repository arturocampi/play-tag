<ul class="navbar-nav">
    <!-- DROPDOWN FORUM MENU COMPONENT -->
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link title-navbar-custom pointer nav-button fw-bolder py-0 m-0" role="button" data-bs-toggle="dropdown">
            <span class="align-middle inter-font-links">{{ __('Sports') }}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start dropdown-items-custom" aria-labelledby="navbarDropdown">
            <a class="dropdown-item item-style-custom" href="{{ route('threads.fetch',['category' => 1 , 'tag' => 1]) }}">
                <span class="align-item">{{ __('Soccer') }}</span>
            </a>
            <a class="dropdown-item item-style-custom" href="{{ route('threads.fetch',['category' => 1 , 'tag' => 2]) }}">
                <span class="align-item">{{ __('Cycling') }}</span>
            </a>
            <a class="dropdown-item item-style-custom" href="{{ route('threads.fetch',['category' => 1 , 'tag' => 3]) }}">
                <span class="align-item">{{ __('Tenis') }}</span>
            </a>
            <a class="dropdown-item item-style-custom" href="{{ route('threads.fetch',['category' => 1 , 'tag' => 4]) }}">
                <span class="align-item">{{ __('Basketball') }}</span>
            </a>
        </ul>
    </li>
    <!-- END DROPDOWN FORUM MENU COMPONENT -->
    <!-- DROPDOWN FORUM MENU COMPONENT -->
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link title-navbar-custom pointer nav-button fw-bolder py-0 m-0" role="button" data-bs-toggle="dropdown">
            <span class="align-middle inter-font-links">{{ __('Technology') }}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start dropdown-items-custom" aria-labelledby="navbarDropdown">
            <a class="dropdown-item item-style-custom" href="{{ route('threads.fetch',['category' => 2 , 'tag' => 1]) }}">
                <span class="align-item">{{ __('Computing') }}</span>
            </a>
            <a class="dropdown-item item-style-custom" href="{{ route('threads.fetch',['category' => 2 , 'tag' => 2]) }}">
                <span class="align-item">{{ __('Phones') }}</span>
            </a>
            <a class="dropdown-item item-style-custom" href="{{ route('threads.fetch',['category' => 2 , 'tag' => 3]) }}">
                <span class="align-item">{{ __('Videogames') }}</span>
            </a>
            <a class="dropdown-item item-style-custom" href="{{ route('threads.fetch',['category' => 2 , 'tag' => 4]) }}">
                <span class="align-item">{{ __('Consoles') }}</span>
            </a>
        </ul>
    </li>
    <!-- END DROPDOWN FORUM MENU COMPONENT -->
    <!-- DROPDOWN FORUM MENU COMPONENT -->
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link title-navbar-custom pointer nav-button fw-bolder py-0 m-0" role="button" data-bs-toggle="dropdown">
            <span class="align-middle inter-font-links">{{ __('Motor') }}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start dropdown-items-custom" aria-labelledby="navbarDropdown">
            <a class="dropdown-item item-style-custom" href="{{ route('threads.fetch',['category' => 3 , 'tag' => 1]) }}">
                <span class="align-item">{{ __('Cars') }}</span>
            </a>
            <a class="dropdown-item item-style-custom" href="{{ route('threads.fetch',['category' => 3 , 'tag' => 2]) }}">
                <span class="align-item">{{ __('Motorcycles') }}</span>
            </a>
            <a class="dropdown-item item-style-custom" href="{{ route('threads.fetch',['category' => 3 , 'tag' => 3]) }}">
                <span class="align-item">{{ __('Competition') }}</span>
            </a>
            <a class="dropdown-item item-style-custom" href="{{ route('threads.fetch',['category' => 3 , 'tag' => 4]) }}">
                <span class="align-item">{{ __('Classics') }}</span>
            </a>
        </ul>
    </li>
    <!-- END DROPDOWN FORUM MENU COMPONENT -->
</ul>