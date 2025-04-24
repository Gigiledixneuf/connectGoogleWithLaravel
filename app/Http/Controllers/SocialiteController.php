<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

// Importe la façade Auth pour connecter l'utilisateur
use Illuminate\Support\Facades\Auth;

class SocialiteController extends Controller
{
    // Méthode pour rediriger l'utilisateur vers la page de connexion Google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Méthode appelée par Google après autorisation de l'utilisateur
    public function handleGoogleCallback()
    {
        // Récupère les infos de l'utilisateur à partir de Google
        $googleUser = Socialite::driver('google')->stateless()->user();

        // Cherche un utilisateur existant par email ou en crée un nouveau
        $user = User::firstOrCreate(
            ['email' => $googleUser->getEmail()], // Critère de recherche
            [
                'name' => $googleUser->getName(),   // Nom récupéré depuis Google
                'password' => null,                 // Aucun mot de passe car Google gère l'auth
            ]
        );

        // Connecte l'utilisateur dans Laravel
        Auth::login($user);

        // Redirige l'utilisateur connecté vers la page d'accueil ou tableau de bord
        return redirect('/welcome'); 
    }
}
