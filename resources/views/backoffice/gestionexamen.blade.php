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
        <div>Page de gestion des examens</div>
    </div>
    <div class="create-link-style">
        <a href="{{route('creationexamen')}}" >Créer un examen</a>
    </div>
    <div>
        <table class="test-table">
            <thead class="thead-style">
                <tr class="tr-style">
                    <td class="border-style tr-style">Code repère</td>
                    <td class="border-style tr-style">Dictionnaire ?</td>
                    <td class="border-style tr-style">Calculatrice ?</td>
                    <td class="border-style tr-style">Dématérialisé ?</td>
                    <td class="border-style tr-style">Commentaire</td>
                    <td class="border-style tr-style">Règle</td>
                    <td class="border-style tr-style">Date</td>
                    <td class="border-style tr-style">Créer le</td>
                    <td class="border-style tr-style">Mis à jour</td>
                    <td class="border-style tr-style">Nom de formation</td>
                    <td class="border-style tr-style">Matière d&#039épreuve</td>
                    <td class="border-style tr-style">Nom de la salle</td>
                    <td class="border-style tr-style">Modifier l&#039examen</td>
                    <td class="border-style tr-style">Supprimer l&#039examen</td>
                </tr>
            </thead>
            <tbody class="tbody-style">
                @foreach($ex as $listeexamens)
                <tr class="tr-style">
                    <td class="border-style tr-style">{{$listeexamens->repere}}</td>
                    @if ($listeexamens->dictionnaire == 0)
                    <td class="border-style tr-style">Non</td>
                    @else
                    <td class="border-style tr-style">Oui</td>
                    @endif
                    @if ($listeexamens->calculatrice == 0)
                    <td class="border-style tr-style">Non</td>
                    @else
                    <td class="border-style tr-style">Oui</td>
                    @endif
                    @if ($listeexamens->estdematerialise == 0)
                    <td class="border-style tr-style">Non</td>
                    @else
                    <td class="border-style tr-style">Oui</td>
                    @endif
                    <td class="border-style-examen tr-style">{{$listeexamens->commentaire}}</td>
                    <td class="border-style-examen tr-style">{{$listeexamens->regle}}</td>
                    <td class="border-style tr-style">{{$listeexamens->date}}</td>
                    <td class="border-style tr-style">{{$listeexamens->created_at}}</td>
                    <td class="border-style tr-style">{{$listeexamens->updated_at}}</td>
                    <td class="border-style tr-style">{{$listeexamens->Formation->nom}}</td>
                    <td class="border-style tr-style">{{$listeexamens->Epreuve->matiere}}</td>
                    <td class="border-style tr-style">{{$listeexamens->Salle->nom}}</td>
                    <td class="border-style tr-style">
                        <form action="{{route('modificationexamen', $listeexamens['id'])}}" method="POST">
                            @csrf
                            <input type="submit" value="Modifier" class="btn_modif">
                        </form>
                    </td>
                    <td class="border-style tr-style">
                        <form action="{{route('supprimerexamen', $listeexamens['id'])}}" method="POST" id="destroyer_examen">
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
