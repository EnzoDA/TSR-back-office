@extends('backoffice/dashboardtemplate')
@section('header')
<script>
    function Test() {
  /*document.getElementById("destroyer").addEventListener("submit", function(event) {
    event.preventDefault();*/
    if (confirm("Êtes-vous sûr de vouloir supprimer cette alerte ?")) {
      document.getElementById("destroyer").submit();
    }
  ;
};
</script>
@endsection
@section('content')

@auth
<section class="main-container">
    <div class="test-title">
        Page de gestion des formations
    </div>
    <div class="create-link-style">
        <a href="{{route('creationformation')}}" >Créer une formation</a>
    </div>
    <div>
        <table class="test-table">
            <thead class="thead-style">
                <tr class="tr-style">
                    <td class="border-style tr-style">Nom</td>
                    <td class="border-style tr-style">Code</td>
                    <td class="border-style tr-style">Série</td>
                    <td class="border-style tr-style">Académie</td>
                    <td class="border-style tr-style">Créer le</td>
                    <td class="border-style tr-style">Mis à jour le</td>
                    <td class="border-style tr-style">Modifier une formation</td>
                    <td class="border-style tr-style">Supprimer une formation</td>
                </tr>
            </thead>
            <tbody class="tbody-style">
                @foreach($f as $listeformation)
                <tr class="tr-style">
                    <td class="border-style tr-style">{{$listeformation->nom}}</td>
                    <td class="border-style-formation tr-style">{{$listeformation->code}}</td>
                    <td class="border-style-formation tr-style">{{$listeformation->serie}}</td>
                    <td class="border-style-formation tr-style">{{$listeformation->academie}}</td>
                    <td class="border-style tr-style">{{$listeformation->created_at}}</td>
                    <td class="border-style tr-style">{{$listeformation->updated_at}}</td>
                    <td class="border-style tr-style">
                        <form action="{{route('modificationformation', $listeformation['id'])}}" method="POST">
                            @csrf
                            <input type="submit" value="Modifier" class="btn_modif">
                        </form>
                    </td>
                    <td class="border-style">
                        <form action="{{route('supprimerformation', $listeformation['id'])}}" method="POST" id="destroyer_formation">
                            @csrf
                            <input type="submit" value="Supprimer" class="button-style" onclick="Test()">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
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
    link.href = "{{asset('assets/css/gestionstyle.css')}}";
    document.getElementsByTagName('HEAD')[0].appendChild(link);
</script>
