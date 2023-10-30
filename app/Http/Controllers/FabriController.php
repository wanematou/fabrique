<?php

namespace App\Http\Controllers;
use App\http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fabri;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Support\Facades\Hash;
class FabriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function authen2(Request $request)
    {
        if ($request->session()->get('fabri')){
            return redirect('/espace2')->with('status', 'vous devez vous deconnecter');
        }
        return view('authen');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Fabri $fabri, Request $request)
    {
        $fabri->nom = $request->input('nom');
        $fabri->prenom = $request->input('prenom');
        $fabri->mail = $request->input('mail');
        $fabri->mot_passe = bcrypt($request->input('mot_passe'));
        $fabri->save();
        return redirect('/')->with('status', 'Enregistrer avec succès');
    }

    public function reservation(Reservation $reservation, Request $request)
    {
       $reservation->nom = $request->input('nom');      
       $reservation->mail = $request->input('mail');
       $reservation->telephone = $request->input('telephone');
       $reservation->date_visite = $request->input('date_visite');
       $reservation->heure_visite = $request->input('heure_visite');
       $reservation->save();
        return redirect('/espace2')->with('succes', 'Enregistrer avec succès');
    }

    public function statut()
    {
        $reservations = Reservation::all();
        return view('statut_etudiant', ['reservations' => $reservations]);
    }



    public function login(Request $request)
{
    $mail = $request->input('mail');
    $motPasse = $request->input('mot_passe');

    $fabri = Fabri::where('mail', $mail)->first();

    if ($fabri) {
        if (Hash::check($motPasse, $fabri->mot_passe)) {
            if ($fabri->status === 1) {
                // Statut égal à 1 (accès)
                $request->session()->put('fabri', $fabri);
                return redirect('/espace2');
            } else {
                // Statut égal à 0 (non accès)
                return back()->with('status', 'accès bloqué.');
            }
        } else {
            return back()->with('status', 'Identifiant ou mot de passe incorrect');
        }
    } else {
        return back()->with('status', 'Aucun compte avec cette adresse e-mail trouvé');
    }
}

    
public function logout(Request $request)
{
  $request->session()->forget('fabri');
  return redirect('/')->with('status', 'Deconnecté.');
} 


public function create1(User $user, Request $request)
{
   $user->name = $request->input('name');
   $user->email = $request->input('email');
   $user->password = bcrypt($request->input('password'));
   $user->save();
    return redirect('/')->with('status', 'Enregistrer avec succès');
}



public function formlogin(Request $request)
{
    if ($request->session()->get('user')){
        return redirect('/espace1')->with('status', 'vous devez vous deconnecter');
    }
    return view('admin.login');
}

public function login1(User $user,Request $request)
{
   
    $user = User::where('email', $request->input('email'))->first();

    if($user){
            if(Hash::check($request->input('password'), $user->password)){
                $request->session()->put('admin', $user);
                return redirect('/espace1');
                
            }else{
                return back()->with('status','identifiant ou mot de passe incorrect');
            }
    } else{
        return back()->with('status','vous n\'avez pas de compte avec ce mail');
    }
       
}
public function logout1(Request $request)
{
  $request->session()->forget('user');
  return redirect('/')->with('status', 'Deconnecté.');
} 


public function reservation1()
{
    $fabris = Fabri::all();
    return view('admin.acces', ['fabris' => $fabris]);
}


public function approuver($id) {
    // Mettez à jour le statut de la réservation à 1 (approuvé)
    Fabri::where('id', $id)->update(['status' => 1]);

    // Redirigez l'utilisateur vers une page appropriée (par exemple, la page de gestion des demandes)
    return redirect()->route('statut_reservation1')->with('success', 'La réservation a été approuvée avec succès.');
}


public function annuler($id) {
    // Mettez à jour le statut de la réservation à 0 (annulé)
    Fabri::where('id', $id)->update(['status' => 0]);

    // Redirigez l'utilisateur vers une page appropriée (par exemple, la page de gestion des demandes)
    return redirect()->route('statut_reservation1')->with('success', 'La réservation a été annulée avec succès.');
}




public function reservation2()
{
    $reservations = Reservation::all();
    return view('admin.gestion_reservation', ['reservations' => $reservations]);
}



public function approuver2($id) {
    // Mettez à jour le statut de la réservation à 1 (approuvé)
    Reservation::where('id', $id)->update(['status' => 1]);

    // Redirigez l'utilisateur vers une page appropriée (par exemple, la page de gestion des demandes)
    return redirect()->route('statut_reservation2')->with('success', 'La réservation a été approuvée avec succès.');
}



public function annuler2($id) {
    // Mettez à jour le statut de la réservation à 0 (annulé)
    Reservation::where('id', $id)->update(['status' => 0]);

    // Redirigez l'utilisateur vers une page appropriée (par exemple, la page de gestion des demandes)
    return redirect()->route('statut_reservation2')->with('success', 'La réservation a été annulée avec succès.');
}

}

