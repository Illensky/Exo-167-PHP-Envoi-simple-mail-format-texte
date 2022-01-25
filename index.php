<?php

/**
 * 1. Complétez $from et $to ( évitez d'utiliser la même adresse mail )
 * 2. Envoyez un mail avec ces informations, si certaines choses manquent, complétez
 * 3. Déployez sur votre serveur et testez !
 */

$from = 'alexis.laroche.02240@gmail.com';
$to = 'alexis.laroche.02240@gmail.com';
$message = 'Ceci est le message N°1 il ne comporte pas 70 caractéres mais pas grave
Ceci est le message N°2 il ne comporte pas 70 caractéres mais pas grave';

$message = wordwrap($message, 70, "\r\n");
$subject = "test";

$headers = [
  'From' => 'alexis.laroche.02240@gmail.com',
    'Cc' => 'alexis.laroche.02240@gmail.com',
    'Bcc' => 'alexis.laroche.02240@gmail.com',
];
// TODO Votre code ici.

if (mail($to, $subject, $message, $headers)) {
    echo "Message envoyer";
}
else {
    echo "Message non envoyer";
}

$fileOpen = fopen('mails.txt', 'a');

fwrite($fileOpen, $message.$to."\r\n");

fclose($fileOpen);
/**
 * 4. Commentez le code précédent, mais gardez les variables $from et $to
 * 5. Définissez un message long d'au moins 120 caractères au choix.
 * 6. Faites en sorte de couper la phrase puisqu'elle fera plus de 70 caractères
 * 7. Envoyez le mail.
 * 8. En cas d'erreur, affichez le message: Une erreur est survenue lors de l'envoi du mail
 * 9. En cas de succès, affichez le message: Le message a bien été envoyé. Merci !
 * 10. Faites en sorte que chaque message envoyé soit enregistré dans un fichier 'mails.txt'
 *     Les valeurs à enregistrer SUR UNE SEULE LIGNE sont: $message, $to
 *     N'écrasez pas les valeurs déjà existantes ( s'il y en a ).
 */
// TODO Votre code ici.