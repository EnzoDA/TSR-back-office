@extends('backoffice/dashboardtemplate')
@section('header')
@endsection
@section('content')

@auth

<section class="main-container">
    <div class="title-style">
        <p>Modification d&#039une formation</p>
    </div>
    <form action="{{route('modifformationeencours')}}" method="post" class="form-style">
        @csrf
        <label for="nom" class="element-style">Nom :</label>
        <input type="text" name="nom" pattern="[A-z\s\é\à\è\ç\ù\']{1,100}" title="Seulement des lettres" required class="element-style-input" placeholder="{{$formation->nom}}">
        <label for="code" class="element-style">Code :</label>
        <input type="text" name="code" pattern="[A-z\s\é\à\è\ç\ù\']{1,150}" title="Seulement des lettres" required class="element-style-input" placeholder="{{$formation->code}}">
        <label for="serie" class="element-style">Série :</label>
        <input type="text" name="serie" placeholder="{{$formation->serie}}" pattern="[A-z\s\é\à\è\ç\ù\']{1,100}" title="Seulement des lettres" required class="element-style-input">
        <label for="academie" class="element-style">Académie :</label>
        <input type="text" name="academie" placeholder="{{$formation->academie}}" pattern="[A-z\s\é\à\è\ç\ù\']{1,150}" title="Seulement des lettres" required class="element-style-input">
        <input type="hidden" name="id" value="{{$formation->id}}">
        <input type="submit" value="Modifier" class="button-style">
    </form>
</section>

@endauth

@endsection
@section('footer')
@endsection
<script>
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = "{{asset('assets/css/modifstyle.css')}}";
    document.getElementsByTagName('HEAD')[0].appendChild(link);
</script>
