<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
    <link rel="stylesheet" href="{{asset('assets/css/dashboardtemplate.css')}}">
</head>
<body>
    <section class="header-aspect">
        <div class="logo-position">
            @yield('header')
            <a href="/"><img src="{{asset('assets/img/logo_tsr.png')}}" alt="logo tsr" class="logo-home-size"></a>
        </div>
        <nav class="home-menu">
            <div class="div-menu-links">
                <a href="{{route('epreuvesliste')}}" class="no-text-decoration-links-menu">Gestion des épreuve</a>
            </div>
            <div class="div-menu-links">
                <a href="{{route('alertesliste')}}" class="no-text-decoration-links-menu">Gestion des alertes</a>
            </div>
            <div class="div-menu-links">
                <a href="{{route('examensliste')}}" class="no-text-decoration-links-menu">Gestion des examens</a>
            </div>
            <div class="div-menu-links">
                <a href="{{ route('salleliste') }}" class="no-text-decoration-links-menu">Gestion des salles</a>
            </div>
            <div class="div-menu-links">
                <a href="{{route('formationsliste')}}" class="no-text-decoration-links-menu">Gestion des formations</a>
            </div>
            <div class="login-link">
            @auth
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <input type="submit" value="Se déconnecter" class="deco" >
                </form>
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


