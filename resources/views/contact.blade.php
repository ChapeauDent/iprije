@extends('layouts.site')

@section('title', 'Contact - On prend un café ? | IPRIJ')
@section('description', 'Contactez IPRIJ pour discuter de vos projets digitaux autour d\'un café. Accompagnement personnalisé pour TPE/PME en Normandie, Île-de-France et toute la France.')

@section('content')

<!-- Hero Contact -->
<section class="hero-contact">
    <div class="container">
        <div class="hero-contact-content">
            <div class="hero-contact-text">
                <h1>
                    <img src="{{ asset('images/tasse_cafe.svg') }}" alt="Café" class="hero-icon">
                    On prend un café ?
                </h1>
                <p>Discutons de vos projets digitaux dans une ambiance détendue. Premier audit gratuit de 30 minutes pour analyser vos besoins et définir ensemble la meilleure stratégie.</p>
                <div class="contact-info">
                    <div class="contact-item">
                        <img src="{{ asset('images/mail.svg') }}" alt="Email" class="contact-icon">
                        <a href="mailto:contact@iprije.fr">contact@iprije.fr</a>
                    </div>
                    <div class="contact-item">
                        <img src="{{ asset('images/zones/normandie.svg') }}" alt="Zone" class="contact-icon">
                        <span>Vernon, Normandie, Île-de-France, National</span>
                    </div>
                </div>
            </div>
            <div class="hero-contact-form">
                <div class="contact-form-container">
                    <h2>Envoyez-nous un message</h2>
                    
                    @if(session('success'))
                        <div class="alert alert-success">
                            <strong>Merci !</strong> {{ session('success') }}
                        </div>
                    @endif
                    
                    @if(session('error'))
                        <div class="alert alert-error">
                            <strong>Oups !</strong> {{ session('error') }}
                        </div>
                    @endif
                    
                    <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
                        @csrf
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nom">
                                    <img src="{{ asset('images/user.svg') }}" alt="Nom" class="form-icon">
                                    Nom *
                                </label>
                                <input type="text" id="nom" name="nom" value="{{ old('nom') }}" required>
                                @error('nom')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="prenom">
                                    <img src="{{ asset('images/user.svg') }}" alt="Prénom" class="form-icon">
                                    Prénom *
                                </label>
                                <input type="text" id="prenom" name="prenom" value="{{ old('prenom') }}" required>
                                @error('prenom')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">
                                    <img src="{{ asset('images/mail.svg') }}" alt="Email" class="form-icon">
                                    Email *
                                </label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="telephone">
                                    <img src="{{ asset('images/phone.svg') }}" alt="Téléphone" class="form-icon">
                                    Téléphone *
                                </label>
                                <input type="tel" id="telephone" name="telephone" value="{{ old('telephone') }}" required>
                                @error('telephone')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">
                                <img src="{{ asset('images/message.svg') }}" alt="Message" class="form-icon">
                                Votre message *
                            </label>
                            <textarea id="message" name="message" rows="6" required placeholder="Parlez-nous de votre projet, vos besoins, vos objectifs...">{{ old('message') }}</textarea>
                            @error('message')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-lg">
                            <img src="{{ asset('images/tasse_cafe.svg') }}" alt="Café" class="btn-icon">
                            Prenons ce café !
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pourquoi nous choisir -->
<section class="why-contact">
    <div class="container">
        <div class="section-header">
            <h2>Pourquoi choisir IPRIJ ?</h2>
        </div>
        <div class="why-grid">
            <div class="why-card">
                <img src="{{ asset('images/Iprij_feature/audit_gratuit.webp') }}" alt="Audit gratuit" class="why-icon">
                <h3>Audit gratuit</h3>
                <p>Premier audit de 1h - 1h30 gratuit pour analyser vos besoins sans engagement</p>
            </div>
            <div class="why-card">
                <img src="{{ asset('images/Iprij_feature/accompagnement_personnalise.webp') }}" alt="Accompagnement personnalisé" class="why-icon">
                <h3>Accompagnement personnalisé</h3>
                <p>Solutions sur mesure adaptées à votre secteur d'activité et vos objectifs</p>
            </div>
            <div class="why-card">
                <img src="{{ asset('images/Iprij_feature/expertise_locale.webp') }}" alt="Expertise locale" class="why-icon">
                <h3>Expertise locale</h3>
                <p>Connaissance du tissu économique local et accompagnement de proximité</p>
            </div>
            <div class="why-card">
                <img src="{{ asset('images/Iprij_feature/solutions_completes.webp') }}" alt="Solutions complètes" class="why-icon">
                <h3>Solutions complètes</h3>
                <p>De la stratégie à la mise en œuvre : web, marketing, IA, formation...</p>
            </div>
        </div>
    </div>
</section>

@endsection