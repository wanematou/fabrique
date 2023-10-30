<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de Réservation de Visite</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    <h1>Réservation de Visite</h1>
    
    <form action="{{url('/commande')}}" method="POST">
    @method('post')
            @csrf
        <label for="nom">Nom complet :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" name="mail" required><br><br>

        <label for="telephone">Numéro de téléphone :</label>
        <input type="tel" id="telephone" name="telephone" required><br><br>

        <label for="date_visite">Date de la visite :</label>
        <input type="date" id="date_visite" name="date_visite" required><br><br>

        <label for="heure_visite">Heure de la visite :</label>
        <input type="time" id="heure_visite" name="heure_visite" required><br><br>

        <button type="submit">Réserver la Visite</button>
    </form>
</body>
</html>
