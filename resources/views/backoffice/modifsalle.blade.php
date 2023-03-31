@extends('backoffice/dashboardtemplate')
@section('header')
@endsection
@section('content')
@auth

<section class="main-container">
    <div class="title-style">
        <p>Modification d&#039une epreuve</p>
    </div>
    <form action="{{ route('salleupdate', $salle->id) }}" method="post" class="form-style">
        @csrf
        <label for="matiere" class="element-style">Le nom de la salle :</label>
        <input type="text" name="nom" placeholder="{{$salle->nom}}" pattern="[A-Z][0-9]{1,30}" title="Seulement des lettres en majuscule avec des chiffres" required  class="element-style-input">
        <input type="submit" value="Modifier"  class="button-style">
    </form>
</section>

@endauth
@section('footer')
@endsection
<script>
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = "{{asset('assets/css/modifstyle.css')}}";
    document.getElementsByTagName('HEAD')[0].appendChild(link);
</script>
@stop
