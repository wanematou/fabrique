<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tableau de bord vertical à gauche - Bootstrap 5</title>
  <link rel="stylesheet" href="{{asset('bootstrap-5.2.3-dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('style.css')}}">
  <style>
    .sidebar {
      height: 100vh;
    }

    .chat-container {
      height: 100vh;
      overflow-y: scroll;
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3 col-lg-2 bg-primary sidebar">
      <!-- Barre latérale -->
      <h2 class="text-light mt-5" id="espace_etudiant">FABRIK</h2>
      
    </div>
    
    <div class="col-md-9 col-lg-10">
    <a href="/deconnexion">Deconnexion</a>
<div class="colgnrl">
 <a href="/access" class="col3"><img src="{{ asset('image/reservation.png') }}" alt="secretaire" width="200" height="200" class="">
   <p>Demande d'accès</p></a>
 <a href="/gestion_reservation" class="col4"><img src="{{ asset('image/liste.png') }}" alt="secretaire" width="200" height="200" class="">
   <p>Reservation</p></a>
 </div>
 @if(session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
    @endif
</div>

<link rel="stylesheet" href="{{asset ('bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js')}}">

</body>
</html>

