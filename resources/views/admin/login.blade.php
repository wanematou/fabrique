<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection - La Fabrique</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    <header>
        <h1>Gestion de La Fabrique</h1>
    </header>
    
@if(session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
    @endif
    <main>
        <section class="inscription-form">
            <h2>Renseignez vos données</h2> <br><br><br>
            <form action="{{url('/logintraitement')}}" method="post" >
            @method('post')
            @csrf
                <label for="mail">Email :</label>
                <input type="email" id="mail" name="email" required>

                <label for="mot_passe">Mot de passe :</label>
                <input type="password" id="mot_passe" name="password" required> <br>

                <button type="submit">Se connecter</button>
            </form>
        </section>
    </main> <br><br><br><br>
    <footer>
        <p>&copy; 2023 La Fabrique</p>
    </footer>
</body>
</html>
