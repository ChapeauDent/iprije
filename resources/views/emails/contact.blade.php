<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nouveau message de contact</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <h2 style="color: #2B4F75; border-bottom: 2px solid #387B79; padding-bottom: 10px;">
            Nouveau message de contact
        </h2>
        
        <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin: 20px 0;">
            <h3 style="color: #2B4F75; margin-top: 0;">Informations de contact</h3>
            <p><strong>Nom :</strong> {{ $nom }}</p>
            <p><strong>Prénom :</strong> {{ $prenom }}</p>
            <p><strong>Email :</strong> <a href="mailto:{{ $email }}">{{ $email }}</a></p>
            <p><strong>Téléphone :</strong> {{ $telephone }}</p>
        </div>
        
        <div style="background: white; padding: 20px; border: 1px solid #ddd; border-radius: 8px;">
            <h3 style="color: #2B4F75; margin-top: 0;">Message :</h3>
            <p style="white-space: pre-line;">{{ $contenu_message }}</p>
        </div>
        
        <div style="margin-top: 30px; padding: 15px; background: #e7f3ff; border-left: 4px solid #2B4F75;">
            <p style="margin: 0; font-size: 14px; color: #666;">
                Ce message a été envoyé depuis le formulaire de contact du site IPRIJ.
            </p>
        </div>
    </div>
</body>
</html>