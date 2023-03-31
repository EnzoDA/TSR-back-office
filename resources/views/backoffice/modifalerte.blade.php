@extends('backoffice/dashboardtemplate')
@section('header')
@endsection
@section('content')

@auth

<section class="main-container">
    <div class="title-style">
       Modification d&#039une alerte
    </div>
    <form action="{{route('modifalerteencours')}}" method="post" enctype="multipart/form-data" class="form-style">
        @csrf
        <label for="titre" class="element-style">Titre :</label>
        <input type="text" name="titre" placeholder="{{$alerte->titre}}" pattern="[A-z\s\é\à\è\ç\ù\']{1,100}"   title="Seulement des lettres" required class="element-style">
        <label for="description" class="element-style">Description :</label>
        <textarea name="description" pattern="[A-z\s\é\à\è\ç\ù\']{1,100}" title="Seulement des lettress" required placeholder="{{$alerte->description}}" style="border-color:blue;"></textarea>
        <label for="pdf"  class="element-style">PDF :</label>
        <input type="file" name="pdf" id="pdf" accept=".pdf" style="height:5%;">
        <input type="hidden" id="datemodif" name="datemodif" required>
        <label for="terminee" class="element-style">Terminée :</label>
        <select name="terminee" class="element-style">
            <option value="1">Oui</option>
            <option value="0">Non</option>
        </select>
        <label for="examen_id" class="element-style">Examen lié à l&#039alerte :</label>
        <select name="examenid" placeholder="Choisissez un examen" required class="element-style">
            <option>Sélectionnez un examen</option>
            @foreach($examen as $examens)
            <option value="{{$examens['id']}}">{{$examens->repere}}</option>
            @endforeach
        </select>
        <input type="hidden" name="id" value="{{$alerte->id}}">
        <input type="submit" value="Modifier" class="button-style">
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
    link.href = "{{asset('assets/css/modifstyle.css')}}";
    document.getElementsByTagName('HEAD')[0].appendChild(link);
</script>
