@extends('backoffice/dashboardtemplate')
@section('header')
@endsection
@section('content')

@auth

<section class="main-container">
    <div class="title-style">
        <p>Création d&#039une formation</p>
    </div>
    <form action="{{route('creerformation')}}" method="post" class="form-style">
        @csrf
        <label for="nom" class="element-style">Nom :</label>
        <input type="text" name="nom" pattern="[A-z\s\é\à\è\ç\ù\']{1,100}" title="Seulement des lettres" required class="element-style-input">
        <label for="code" class="element-style">Code :</label>
        <input type="text" name="code" pattern="[A-z\s\é\à\è\ç\ù\']{1,150}" title="Seulement des lettres" required class="element-style-input">
        <label for="serie" class="element-style">Série :</label>
        <input type="text" name="serie" pattern="[A-z\s\é\à\è\ç\ù\']{1,100}" title="Seulement des lettres" required class="element-style-input">
        <label for="academie" class="element-style">Académie :</label>
        <input type="text" name="academie" pattern="[A-z\s\é\à\è\ç\ù\']{1,150}" title="Seulement des lettres" required class="element-style-input">
        <input type="submit" value="Créer" class="button-style">
    </form>
</section>

@endauth

@endsection
@section('footer')
@endsection
<script>
    document.getElementById('datemodif').value = Date();
</script>
<script>
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = "{{asset('assets/css/createstyle.css')}}";
    document.getElementsByTagName('HEAD')[0].appendChild(link);
</script>
