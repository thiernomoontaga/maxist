<?php
enum FrErrorMessages:string {

case REQUIRED = 'Le champ %s est requis';
case EMAIL = 'Le champ %s doit être un email valide';
case UNIQUE_EMAIL= 'Cette adresse email est déjà utilisée';
case MIN = 'Le champ %s doit avoir au moins %s caractères';
case MAX = 'Le champ %s ne doit pas dépasser %s caractères';
case NUMERIC = 'Le champ %s doit être un nombre';
case INTEGER = 'Le champ %s doit être un entier';
case DATE = 'Le champ %s doit être une date valide';
case REGEX = 'Le format du champ %s est invalide';
case IN = 'Le champ %s doit être parmi: %s';
case SAME = 'Les deux champs ne correspondent pas';
case DATE_AFTER = 'la date (%s) doit être postérieure à la date de début.';
case DATE_FORMAT = 'la date doit etre au format jj/mm/aaaa (jour/mois/annee)';
case FILE_MIME = 'Le fichier %s doit être de type JPG ou PNG.';
case FILE_SIZE = 'Le fichier %s ne doit pas dépasser 2MB.';
case UNIQUE_PHONE = "Ce numero existe déjà.";
case UNIQUE = 'Le %s existe déja.';
case LOGIN_ERROR = 'Login et/ou mot de passe incorrect !';
case VERIFY_EMAIL_ERROR = 'Cette adresse email n\'existe pas.';
case FORM_INVALID = 'Formulaire Invalide !';
case VALIDATION_FAILED = 'Erreur de validation';
case EMAIL_EXISTS = 'Cet email est déjà utilisé';
case LOGIN_EXISTS = 'Ce login est déjà utilisé';
case PASSWORD_MISMATCH = 'Les mots de passe ne correspondent pas';
case INVALID_CURRENT_PASSWORD = 'Mot de passe actuel incorrect';
case USER_NOT_FOUND = 'Utilisateur non trouvé';
case INVALID_EMAIL = 'Email invalide';
case FIELD_REQUIRED = 'Ce champ est requis';
case PASSWORD_TOO_WEAK = 'Le mot de passe doit contenir au moins 8 caractères, une majuscule; une minuscule et un chiffre';
}

