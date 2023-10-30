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
                <th>Mail</th>
                <th>Téléphone</th>
                <th>Date de Visite</th>
                <th>Heure de Visite</th>
                <th>Statut</th>
                <th>Confirmation</th>

            </tr>
        </thead>
        <tbody>

        @foreach($reservations as $reservation)
            <tr>

        <td>{{ $reservation->nom }}</td>
                <td>{{ $reservation->mail }}</td>
                <td>{{ $reservation->telephone }}</td>
                <td>{{ $reservation->date_visite }}</td>
                <td>{{ $reservation->heure_visite }}</td>
                <td>
                    @if($reservation->status == 0)
                        En attente
                    @elseif($reservation->status == 1)
                        Approuvé
                    @else
                        Autre status
                    @endif
                </td>
                <td>
                @if($reservation->status == 0)
                <a href="{{ route('confirmation2', ['id' => $reservation->id]) }}">Approuver</a>

                @elseif($reservation->status == 1)
                    <a href="{{ route('annulation2', ['id' => $reservation->id]) }}">Annuler</a>
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
