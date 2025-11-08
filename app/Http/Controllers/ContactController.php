<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:20',
            'message' => 'required|string|max:2000',
        ]);

        // Envoyer l'email
        try {
            Mail::send('emails.contact', $validated, function ($message) use ($validated) {
                $message->to('contact@iprije.com')
                        ->subject('Nouveau message de contact - ' . $validated['nom'] . ' ' . $validated['prenom'])
                        ->replyTo($validated['email'], $validated['nom'] . ' ' . $validated['prenom']);
            });

            // Message adapté selon l'environnement
            if (config('mail.default') === 'log') {
                return redirect()->back()->with('success', 'Votre message a été traité ! (En mode développement, l\'email est sauvegardé dans les logs)');
            } else {
                return redirect()->back()->with('success', 'Votre message a été envoyé avec succès ! Nous vous recontacterons rapidement.');
            }
        } catch (\Exception $e) {
            // Log l'erreur pour le débogage
            \Log::error('Erreur envoi email contact: ' . $e->getMessage());
            
            if (config('app.debug')) {
                return redirect()->back()->with('error', 'Erreur développement: ' . $e->getMessage());
            } else {
                return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'envoi de votre message. Veuillez réessayer.');
            }
        }
    }
}
