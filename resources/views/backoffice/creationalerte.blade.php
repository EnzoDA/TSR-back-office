@extends('backoffice/dashboardtemplate')
@section('header')
@endsection
@section('content')
@auth

<section class="main-container">
    <div class="title-style">
        Création d&#039une alerte
    </div>
    <form action="{{route('creeralerte')}}" method="post" enctype="multipart/form-data" class="form-style">
        @csrf
        <label for="titre" class="element-style">Titre :</label>
        <input type="text" name="titre" pattern="[A-z\s\é\à\è\ç\ù\']{1,100}" title="Seulement des lettres" required class="element-style">
        <label for="description" class="element-style">Description :</label>
        <textarea name="description" pattern="[A-z\s\é\à\è\ç\ù\']{1,250}" title="Seulement des lettress" required style="border-color:blue;"></textarea>
        <label for="pdf" required class="element-style">PDF :</label>
        <input type="file" name="pdf" id="pdf" accept=".pdf" style="height:5%;">
        <input type="hidden" name="terminee" value="0">
        <label for="examen_id" class="element-style">Examen lié à l&#039alerte :</label>
        <select name="examenid" required class="element-style">
            <option>Sélectionnez un examen</option>
            @foreach($examen as $examens)
            <option value="{{$examens['id']}}">{{$examens->repere}}</option>
            @endforeach
        </select>
        <input type="submit" value="Créer" class="button-style">
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
    link.href = "{{asset('assets/css/createstyle.css')}}";
    document.getElementsByTagName('HEAD')[0].appendChild(link);
</script>
