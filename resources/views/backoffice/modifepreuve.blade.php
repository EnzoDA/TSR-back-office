@extends('backoffice/dashboardtemplate')
@section('header')
@endsection
@section('content')

@auth

<section class="main-container">
    <div class="title-style">
        <p>Modification d&#039une epreuve</p>
    </div>
    <form action="{{route('modifepreuveencours')}}" method="post" class="form-style">
        @csrf
        <label for="matiere" class="element-style">Matière :</label>
        <input type="text" name="matiere" placeholder="{{$e->matiere}}" pattern="[A-z\s\é\à\è\ç\ù\']{1,100}" title="Seulement des lettres" required  class="element-style-input">
        <label for="description" class="element-style">Description :</label>
        <input type="text" name="description" placeholder="{{$e->description}}" pattern="[A-z\s\é\à\è\ç\ù\']{1,250}" title="Seulement des lettres" required  class="element-style-input">
        <label for="debutepreuve"  class="element-style">Heure du début de l&#039épreuve :</label>
        <input type="time" name="debutepreuve" required  class="element-style-input">
        <label for="finepreuve"  class="element-style">Heure de fin de l&#039épreuve :</label>
        <input type="time" name="finepreuve" required placeholder="{{$e->serie}}"  class="element-style-input">
        <label for="miseenloge" required  class="element-style">Mise en loge :</label>
        <input type="time" name="miseenloge" required min="02:00" max="4:00" class="element-style-input">
        <input type="hidden" id="datemodif" name="datemodif" required>
        <input type="hidden" name="id" value="{{$e->id}}">
        <input type="submit" value="Modifier"  class="button-style">
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
