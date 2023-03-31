<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
    <link rel="stylesheet" href="{{asset('assets/css/template.css')}}">
</head>
<body>
    <section class="header-aspect">
        <div class="logo-position">
            @yield('header')
            <a href="/"><img src="{{asset('assets/img/logo_tsr.png')}}" alt="logo tsr" class="logo-home-size"></a>
        </div>
        <nav class="home-menu">
            <div class="div-menu-links">
                <a href="#" class="no-text-decoration-links-menu">Erreurs</a>
            </div>
            <div class="div-menu-links">
                <a href="#" class="no-text-decoration-links-menu">Erreurs</a>
            </div>
            <div class="div-menu-links">
                <a href="#" class="no-text-decoration-links-menu">Erreurs</a>
            </div>
            <div class="div-menu-links">
                <a href="#" class="no-text-decoration-links-menu">Erreurs</a>
            </div>
            <div class="div-menu-links">
                <a href="#" class="no-text-decoration-links-menu">Erreurs</a>
            </div>
            <div class="login-link">
            @auth
            <a href="{{route('dashboard')}}">Dashboard</a>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <div><input type="submit">Se déconnecter</div>
            </form>
            @else
            <a href="{{route('login')}}">Se connecter</a>
            @endauth
        </div>
        </nav>
    </section>
    @yield('content')
    <footer class="footer-aspect">
        @yield('footer')
        <div class="copyright">
            <p>@2023 - The Scholars Rats</p>
        </div>
    </footer>
</body>
</html>


