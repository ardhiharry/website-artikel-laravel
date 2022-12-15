<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/">Ardhi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
                <a class="nav-link {{ Request::is('posts') ? 'active' : '' }}" href="/posts">Blog</a>
                <a class="nav-link {{ Request::is('categories') ? 'active' : '' }}" href="/categories">Categories</a>
            </div>
            
            <div class="navbar-nav ms-auto">
                @auth
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Hi, {{ auth()->user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> Dashboard</a>
                            <hr class="dropdown-divider">
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Sign out</button>
                            </form>
                        </div>
                    </div>
                @else
                    <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Sign in</a>
                @endauth
            </div>
        </div>
    </div>
</nav>