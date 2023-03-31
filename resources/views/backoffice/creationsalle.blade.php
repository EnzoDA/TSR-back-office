@extends('backoffice/dashboardtemplate')
@section('header')
@endsection
@section('content')
@auth

</section>
<section class="main-container">
    <div class="title-style">
        Création d&#039une salle
    </div>
    <form action="{{ route('creesalle') }}" method="post" class="form-style">
        @csrf
        @method("POST")
        <label for="matiere" class="element-style">Le nom de la salle :</label>
        <input type="text" autocomplete="off" name="nom" pattern="[A-z\s\é\à\è\ç\ù\'][0-9]{1,20}" title="Seulement des lettres en majuscule avec des chiffres" required class="element-style-input">
        <input type="submit" value="Créer" class="button-style">
    </form>
</section>

@endauth
@section('footer')
@endsection
<script>
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = "{{asset('assets/css/createstyle.css')}}";
    document.getElementsByTagName('HEAD')[0].appendChild(link);
</script>
@stop
