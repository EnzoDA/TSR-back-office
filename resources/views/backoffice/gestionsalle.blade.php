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
<!-- /*<section class="salle_liste">
    <div class="title">
        <div>Page de gestion des salles</div>
    </div>
    <div>
        <table class="salle_table">
            <div class="create-link-style"><form  action="{{  route('creationsalle') }}" method="POST" >
                @csrf
             <button class="btn_creer" type='submit' value="Creer">Créer</button>
          </form></div>
            <thead>
                <td>Id</td>
                <td>Nom</td>
                <td>Modifier</td>
                <td>Supprimer</td>
            </thead>
            <tbody>
                @foreach($salles as $salle)
                <tr>
                    <td>{{$salle->id}}</td>
                    <td>{{$salle->nom}}</td>
                    <td><form  action="{{  route('modifsalle',$salle['id']) }}" method="post" >
                        @csrf
                     <button class="btn_modif" type='submit' value="Modifier" >Modifier</button>
                  </form></td>
                    <td><form  action="{{  route('salledelete',$salle['id']) }}" method="post" >
                        @csrf
                        @method('delete')
                     <button class="btn_supp" type='submit' value='supprimer'>Supprimer</button>
                  </form></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section> */-->

<section class="main-container">
    <div class="test-title">
        Page de gestion des épreuves
    </div>
    <div class="create-link-style">
        <a href="{{route('creationsalle')}}">Créer une salle</a>

    </div>
    <div>
        <table class="test-table">
            <thead class="thead-style">
                <tr class="tr-style">
                    <td class="border-style tr-style">Nom</td>
                    <td class="border-style tr-style">Modifier une salle</td>
                    <td class="border-style tr-style">Supprimer une salle</td>
                </tr>
            </thead>
            <tbody class="tbody-style">
                @foreach($salles as $salle)
                <tr class="tr-style">
                    <td class="border-style tr-style">{{$salle->nom}}</td>
                    <td class="border-style tr-style">
                        <form  action="{{  route('modifsalle',$salle['id']) }}" method="post" >
                            @csrf
                         <button class="btn_modif" type='submit' value="Modifier" >Modifier</button>
                      </form>
                    </td>
                    <td class="border-style">
                        <form  action="{{  route('salledelete',$salle['id']) }}" method="post" id="destroyer_salle" >
                            @csrf
                            @method('delete')
                         <button class="button-style" type='submit' value='supprimer' onclick="Test()">Supprimer</button>
                      </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endauth
@section('footer')
@endsection
<script>
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = "{{asset('assets/css/gestionstyle.css')}}";
    document.getElementsByTagName('HEAD')[0].appendChild(link);
</script>
@stop
