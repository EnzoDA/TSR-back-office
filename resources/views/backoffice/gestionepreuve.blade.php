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
        Page de gestion des épreuves
    </div>
    <div class="create-link-style">
        <a href="{{route('creationepreuve')}}" >Créer une épreuve</a>
    </div>
    <div>
        <table class="test-table">
            <thead class="thead-style">
                <tr class="tr-style">
                    <td class="border-style tr-style">Matière</td>
                    <td class="border-style tr-style">Description</td>
                    <td class="border-style tr-style">Heure de début épreuve</td>
                    <td class="border-style tr-style">Heure de fin épreuve</td>
                    <td class="border-style tr-style">Mise en loge</td>
                    <td class="border-style tr-style">Créer le</td>
                    <td class="border-style tr-style">Mis à jour le</td>
                    <td class="border-style tr-style">Modifier une épreuve</td>
                    <td class="border-style tr-style">Supprimer une épreuve</td>
                </tr>
            </thead>
            <tbody class="tbody-style">
                @foreach($epreuves as $listeepreuves)
                <tr class="tr-style">
                    <td class="border-style tr-style">{{$listeepreuves->matiere}}</td>
                    <td class="border-style-epreuve tr-style">{{$listeepreuves->description}}</td>
                    <td class="border-style tr-style">{{$listeepreuves->debutepreuve}}</td>
                    <td class="border-style tr-style">{{$listeepreuves->finepreuve}}</td>
                    <td class="border-style tr-style">{{$listeepreuves->miseenloge}}</td>
                    <td class="border-style tr-style">{{$listeepreuves->created_at}}</td>
                    <td class="border-style tr-style">{{$listeepreuves->updated_at}}</td>
                    <td class="border-style tr-style">
                        <form action="{{route('modifepreuve', $listeepreuves['id'])}}" method="POST">
                            @csrf
                            <input type="submit" value="Modifier" class="btn_modif">
                        </form>
                    </td>
                    <td class="border-style">
                        <form action="{{route('supprimerepreuve', $listeepreuves['id'])}}" method="POST" id="destroyer_epreuve">
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
