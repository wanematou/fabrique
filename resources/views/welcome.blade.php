<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Fabrique - Accueil</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    <header>
        <h1>Bienvenue à La Fabrique</h1>
        <p>Votre espace d'apprentissage</p>
    </header>
  
    <main>
        <section class="description">
            <h2>À Propos de La Fabrique</h2>
            <p>
                La Fabrique est un espace d'apprentissage moderne et innovant où vous pouvez développer de nouvelles compétences. Notre installation est équipée des dernières technologies pour vous aider à réussir dans votre formation.
            </p>
        </section>
        <div class="actions">
            <h2>Connectez-vous ou Inscrivez-vous</h2> <br> <br> <br>
            <p> Bienvenue dans notre application de gestion d'accès à la fabrique. Vous pouvez vous inscrire en tant qu'apprenant et réserver un créneau pour accéder à la fabrique.</p><br><br><br><br><br>
            <a href="/authen" class="button">Se Connecter</a>
            <a href="/form" class="button">S'Inscrire</a>
        </div>
    </main>
    @if(session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
    @endif
    <footer>
        <p>&copy; 2023 La Fabrique</p>
    </footer>
</body>
</html>
