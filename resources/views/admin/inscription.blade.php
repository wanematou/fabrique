<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - La Fabrique</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    <header>
        <h1>Inscription à La Fabrique</h1>
    </header>
    <main>
        <section class="inscription-form">
            <h2>Inscription</h2> <br><br><br>
            <form  action="{{route('register1')}}" method="post" >
            @method('post')
            @csrf
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="name" required>

                <label for="mail">Email :</label>
                <input type="email" id="mail" name="email" required>

                <label for="mot_passe">Mot de passe :</label>
                <input type="password" id="mot_passe" name="password" required>

                <button type="submit">S'Inscrire</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 La Fabrique</p>
    </footer>
</body>
</html>
