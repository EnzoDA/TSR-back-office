@extends('backoffice/dashboardtemplate')
@section('header')
@endsection
@section('content')

@auth

<section class="main-container">
    <div class="title-style">
        <p>Création d&#039un examen</p>
    </div>
    <form action="{{route('creerexamen')}}" method="post" class="form-style">
        @csrf
        <label for="repere" class="element-style">Code repère :</label>
        <input type="text" name="repere" required class="element-style-input">
        <label for="dictionnaire" class="element-style">Dictionnaire ?</label>
        <select name="dictionnaire" class="element-style-input">
            <option value="1">Oui</option>
            <option value="0">Non</option>
        </select>
        <label for="calculatrice" class="element-style">Calculatrice ?</label>
        <select name="calculatrice" class="element-style-input">
            <option value="1">Oui</option>
            <option value="0">Non</option>
        </select>
        <label for="estdematerialise" class="element-style">Est dématérialisé :</label>
        <select name="estdematerialise" class="element-style-input">
            <option value="1">Oui</option>
            <option value="0">Non</option>
        </select>
        <label for="commentaire" class="element-style">Commentaire :</label>
        <textarea type="text" name="commentaire" pattern="[A-z\s\é\à\è\ç\ù\']{1,250}" title="Seulement des lettres" class="element-style-input"></textarea>
        <label for="regle" required class="element-style">Règle :</label>
        <textarea type="text" name="regle" pattern="[A-z\s\é\à\è\ç\ù\']{1,350}" title="Seulement des lettres" required class="element-style-input"></textarea>
        <label for="date" class="element-style">Date :</label>
        <input type="date" name="date" required class="element-style-input">
        <label for="formation_id" class="element-style">Nom de la formation :</label>
        <select name="formation_id" placeholder="Choisissez une formation" required class="element-style-input">
            <option>Sélectionnez une formation</option>
            @foreach($formation as $formations)
            <option value="{{$formations['id']}}">{{$formations->nom}}</option>
            @endforeach
        </select>
        <label for="epreuve_id" class="element-style">Matière de l&#039épreuve :</label>
        <select name="epreuve_id" placeholder="Choisissez une epreuve" required class="element-style-input">
            <option>Sélectionnez une matière</option>
            @foreach($epreuve as $epreuves)
            <option value="{{$epreuves['id']}}">{{$epreuves->matiere}}</option>
            @endforeach
        </select>
        <label for="salle_id" class="element-style">Nom de la salle :</label>
        <select name="salle_id" placeholder="Choisissez une salle" required class="element-style-input">
            <option>Sélectionnez une salle</option>
            @foreach($salle as $salles)
            <option value="{{$salles['id']}}">{{$salles->nom}}</option>
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
