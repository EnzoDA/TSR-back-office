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
        <div>Page de gestion des alertes</div>
    </div>
    <div class="create-link-style">
        <a href="{{route('creationalerte')}}" >Créer une alerte</a>
    </div>
    <div>
        <table class="test-table">
            <thead class="thead-style">
                <tr class="tr-style">
                    <td class="border-style tr-style">Titre</td>
                    <td class="border-style tr-style">Créer le</td>
                    <td class="border-style tr-style">Mis à jour le</td>
                    <td class="border-style tr-style">Description</td>
                    <td class="border-style tr-style">PDF</td>
                    <td class="border-style tr-style">Terminée</td>
                    <td class="border-style tr-style">Code repère examen</td>
                    <td class="border-style tr-style">Modifier un examen</td>
                    <td class="border-style tr-style">Supprimer un examen</td>
                </tr>
            </thead>
            <tbody class="tbody-style">
                @foreach($alertes as $listealertes)
                <tr class="tr-style">
                    <td class="border-style tr-style">{{$listealertes->titre}}</td>
                    <td class="border-style tr-style">{{$listealertes->created_at}}</td>
                    <td class="border-style tr-style">{{$listealertes->updated_at}}</td>
                    <td class="border-style tr-style">{{$listealertes->description}}</td>
                    <td class="border-style tr-style"><a href="{{ route('afficherPdf', $listealertes['pdf']) }}">Lien</a></td>
                    @if ($listealertes->terminee == 0)
                    <td class="border-style tr-style">Non</td>
                    @else
                    <td class="border-style tr-style">Oui</td>
                    @endif
                    <td class="border-style tr-style">{{$listealertes->Examen->repere}}</td>
                    <td class="border-style tr-style">
                        <form action="{{route('modificationalerte', $listealertes['id'])}}" method="POST">
                            @csrf
                            <input type="submit" value="Modifier" class="btn_modif">
                        </form>
                    </td>
                    <td class="border-style tr-style">
                        <form action="{{route('supprimeralerte', $listealertes['id'])}}" method="POST" id="destroyer">
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
