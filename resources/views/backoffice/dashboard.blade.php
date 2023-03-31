@extends('backoffice/dashboardtemplate')
@section('header')
@endsection
@section('content')

@auth
<section class="connected-section">
    <div class="welcome-message">
        <div>Bienvenue sur le back-office</div><br>
        <div style="text-align: center;"><span class="user-color-underligne">{{Auth::User()->name}}</span></div>
    </div>
    <div class="welcome-description">
        <div>Ici, vous pouvez gérer des épreuves, les alertes, les examens, les salles et les formations</div>
    </div>
</section>
@endauth

@endsection
@section('footer')
@endsection
<script>
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = "{{asset('assets/css/dashboard.css')}}";
    document.getElementsByTagName('HEAD')[0].appendChild(link);
</script>
