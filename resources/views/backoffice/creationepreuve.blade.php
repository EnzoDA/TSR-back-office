@extends('backoffice/dashboardtemplate')
@section('header')
@endsection
@section('content')
@auth

<section class="main-container">
    <div class="title-style">
        Création d&#039une épreuve
    </div>
    <form action="{{route('creerepreuve')}}" method="post" class="form-style">
        @csrf
        <label for="matiere" class="element-style">Matière :</label>
        <input type="text" name="matiere" pattern="[A-z\s\é\à\è\ç\ù\']{1,100}" title="Seulement des lettres" required class="element-style-input">
        <label for="description" class="element-style">Description :</label>
        <textarea type="text" name="description" pattern="[A-z\s\é\à\è\ç\ù\']{1,250}" title="Seulement des lettres" required class="element-style-input" ></textarea>
        <label for="debutpereuve" class="element-style">Heure du début de l&#039épreuve :</label>
        <input type="time" name="debutepreuve" min="08:00" max="20:00"  required class="element-style-input">
        <label for="finepreuve" class="element-style">Heure de fin de l&#039épreuve :</label>
        <input type="time" name="finepreuve" required min="08:00" max="20:00" class="element-style-input">
        <label for="miseenloge" required class="element-style">Mise en loge :</label>
        <input type="time" name="miseenloge" required min="02:00" max="4:00" class="element-style-input">
        <input type="hidden" id="creationdate" name="creationdate" required>
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
