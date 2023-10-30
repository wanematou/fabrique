<!DOCTYPE html>
<html>
<head>
    <title>Réservations en cours</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
<a href="/espace1" id="retour"><img src="{{asset('image/retour.png')}}" alt=""></a>
    <h1>Demande d'accès</h1>
    
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Mail</th>
                <th>Statut</th>
                <th>Confirmation</th>

            </tr>
        </thead>
        <tbody>
            @foreach($fabris as $fabri)
            <tr>
                <td>{{ $fabri->nom }}</td>
                <td>{{ $fabri->prenom }}</td>
                <td>{{ $fabri->mail }}</td>
                <td>
                    @if($fabri->status == 0)
                        En attente
                    @elseif($fabri->status == 1)
                        Approuvé
                    @else
                        Autre status
                    @endif
                </td>
                <td>
                @if($fabri->status == 0)
                <a href="{{ route('confirmation1', ['id' => $fabri->id]) }}">Approuver</a>

                @elseif($fabri->status == 1)
                    <a href="{{ route('annulation1', ['id' => $fabri->id]) }}">Annuler</a>
                @else
                    <!-- Vous pouvez ajouter d'autres actions ici si nécessaire -->
                @endif
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @if(session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
    @endif
</body>
</html>
