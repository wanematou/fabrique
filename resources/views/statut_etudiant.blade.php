<!DOCTYPE html>
<html>
<head>
    <title>Réservations en cours</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
<a href="/espace2" id="retour"><img src="{{asset('image/retour.png')}}" alt=""></a>
    <h1>Réservations en cours</h1>
    
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Mail</th>
                <th>Téléphone</th>
                <th>Date de Visite</th>
                <th>Heure de Visite</th>
                <th>Statut</th>
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
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
