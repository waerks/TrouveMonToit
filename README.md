# TrouveMonToit

### Pages principales
1. Page d'accueil
   * Recherche rapide avec un formulaire (ville, type de bien, budget, etc.).
   * Présentation des fonctionnalités principales du site.
   * Mise en avant des annonces populaires ou récentes.
2. Page de recherche avancée
   * Filtres détaillés (localisation, prix, type de bien, nombre de chambres, surface, etc.).
   * Résultats sous forme de liste et carte interactive.
3. Page de résultats de recherche
   * Affichage des annonces avec pagination.
   * Vue carte et liste combinée pour visualiser les propriétés.
4. Page de détail d'une annonce
   * Informations détaillées sur le bien (description, photos, localisation, caractéristiques).
   * Bouton de contact (agent ou propriétaire).
   * Possibilité d'enregistrer le bien dans une liste de favoris.

### Pages utilisateurs
1. Page d'inscription
   * Formulaire d'inscription pour les utilisateurs (acheteurs, vendeurs, agences).
2. Page de connexion
   * Accès aux comptes existants.
3. Espace personnel
   * Gestion des annonces favorites.
   * Historique des recherches.
   * Gestion des annonces publiées (pour les vendeurs).
4. Page de rpofil utilisateur
   * Modification des informations personnelles.
   * Gestion des préférences de notification.

### Pages pour les vendeurs/agences
1. Page de publication d'une annonce
   * Formulaire détaillé pour créer une annonce (titre, description, prix, photos, localisation, etc.).
2. Tableau de bord des annonces
   * Gestion des annonces publiées (statut, modification, suppression).

### Pages informatives
1. Page à propos
   * Informations sur l'équipe, la mission et les valeurs de "TrouveMonToit".
2. Page d'aide/FAQ
   * Réponses aux questions fréquentes sur l'utilisation du site.
3. Page de contact
   * Formulaire de contact pour des questions générales.
   * Coordonnées et horaires de support.

### Pages légales
1. Page des mentions légales
   * Informations juridiques requises.
2. Page de politique de confidentialité
   * Explication sur la gestion des données personnelles.
3. Page des conditions générales d'utilisation (CGU)
   * Règles et obligations des utilisateurs.

### Pages complémentaires
1. Blog
   * Articles sur le marché immobilier, conseils pour acheter/vendre, etc.
2. Page des témoignages
   * Avis des utilisateurs.
3. Page des partenaires
   * Liste des agences et services partenaires.
4. Page d'erreur (404)
   * Message personnalisé pour les pages introuvables.

<hr>

### Organisation et hiérarchie des pages
1. Structure générale
    * Niveau 1 : Pages globales accessibles à tous (Accueil, Recherche, À propos, etc.).
    * Niveau 2 : Pages nécessitant une connexion (Espace personnel, Publication d'annonce, Tableau de bord).
    * Niveau 3 : Pages administratives (Mentions légales, CGU, Politique de confidentialité).
2. Liens principaux dans le menu de navigation
    * Accueil
    * Recherche
    * Publier une annonce
    * Connexion / Mon compte
    * À propos
    * Contact
3. Pied de page
    * Mentions légales, CGU, Politique de confidentialité.
    * Liens vers les réseaux sociaux et newsletter.

<hr>

### Palette de couleur
| Usage      | Couleur | Code HEX |
| ----------- | ----------- | ----------- |
| Primary      | Bleu marine       | #2C3E50       |
| Secondary   | Gris clair        | #ECECEC        |
| Accent   | Orange chaleureux        | #E67E22        |
| Texte   | Gris foncé        | #4A4A4A        |
| Background   | Blanc cassé        | #F9F9F9        |

1. Palette principale
    * Primary (Couleur principale) : Un bleu marine (#2C3E50).
    * Secondary (Couleur secondaire) : Un gris clair (#ECECEC).
    * Accent (Couleur d'accentuation) : Un orange chaleureux (#E67E22).

2. Texte
    * Couleur de texte principal : Un gris foncé (#4A4A4A) pour une bonne lisibilité.
    * Couleur de texte secondaire : Un gris moyen (#7D7D7D) pour les sous-titres ou descriptions secondaires.

3. Background (Arrière-plan) :
    * Couleur principale de fond : Un blanc cassé (#F9F9F9).
    * Sections alternées : Un gris pâle (#F2F2F2) pour ajouter de la profondeur dans les sections (ex. : témoignages ou articles).

<hr>

### Typographies
1. Titres principaux (H1, H2) : Poppins, Semi-Bold, 36-48px.
2. Sous-titres (H3, H4) : Montserrat, Medium, 24-32px.
3. Texte courant : Open Sans, Regular, 16-18px.
4. Boutons : Montserrat, Bold, 16-18px, avec des majuscules.
5. Citations ou phrases clés : Playfair Display, Italic, 20px.

<hr>

### Relations entre les entités
1. Utilisateur ↔ Annonce (1 à N)
   * Un utilisateur peut publier plusieurs annonces.
   * Annonce est liée à un seul Utilisateur.
2. Annonce ↔ Utilisateur (N à 1)
   * Une annonce est créée par un seul utilisateur.
   * Utilisateur peut avoir plusieurs annonces.
3. Annonce ↔ Photo (1 à N)
   * Une annonce peut avoir plusieurs photos associées.
   * Photo est liée à une seule Annonce.
4. Photo ↔ Annonce (N à 1)
   * Une photo est liée à une annonce spécifique.
   * Annonce peut avoir plusieurs photos.
5. Utilisateur ↔ Favori (N à N)
   * Un utilisateur peut ajouter plusieurs annonces en favoris.
   * Une annonce peut être ajoutée aux favoris de plusieurs utilisateurs.
   * La relation est gérée par la table Favori.
6. Favori ↔ Utilisateur (N à N)
   * Un utilisateur peut avoir plusieurs favoris.
   * Une annonce peut être ajoutée aux favoris de plusieurs utilisateurs.
   * La table Favori gère cette relation.
7. Utilisateur ↔ Commentaire (1 à N)
   * Un utilisateur peut laisser plusieurs commentaires.
   * Commentaire est associé à un seul Utilisateur.
8. Commentaire ↔ Utilisateur (N à 1)
   * Chaque commentaire est écrit par un seul utilisateur.
   * Un Utilisateur peut avoir plusieurs commentaires.
9. Annonce ↔ Commentaire (1 à N)
   * Une annonce peut avoir plusieurs commentaires associés.
   * Commentaire est lié à une seule Annonce.
10. Commentaire ↔ Annonce (N à 1)
   * Chaque commentaire est associé à une annonce spécifique.
   * Annonce peut avoir plusieurs commentaires.
11. Commentaire ↔ Commentaire (1 à N)
   * Un commentaire peut être une réponse à un autre commentaire, créant une hiérarchie de commentaires.
   * Commentaire peut être une réponse à un autre Commentaire (réponse directe à un parent).
12. Commentaire ↔ Commentaire (N à 1)
   * Chaque commentaire peut avoir un parent, ce qui forme une relation de réponse entre les commentaires.
13. Utilisateur ↔ Message (1 à N)
   * Un utilisateur peut envoyer plusieurs messages à d'autres utilisateurs.
   * Message est envoyé par un seul Utilisateur (expéditeur).
14. Message ↔ Utilisateur (N à 1)
   * Un message est envoyé par un seul utilisateur.
   * Utilisateur peut envoyer plusieurs messages.
15. Message ↔ Annonce (N à 1, nullable)
   * Un message peut être associé à une annonce spécifique.
   * Si un message concerne une annonce, il est lié à cette annonce.
16. Annonce ↔ Message (1 à N, nullable)
   * Une annonce peut recevoir plusieurs messages.
   * Un message peut concerner une annonce spécifique, mais cela n'est pas obligatoire (relation nullable).
17. Annonce ↔ Localisation (1 à N)
   * Une annonce est associée à une localisation spécifique (ville, code postal, pays).
   * Localisation peut être liée à plusieurs annonces.
18. Localisation ↔ Annonce (N à 1)
   * Chaque localisation peut être utilisée pour plusieurs annonces.
   * Annonce est liée à une seule Localisation.
19. Annonce ↔ TypeBien (1 à N)
   * Chaque annonce est liée à un TypeBien (maison, appartement, etc.).
   * TypeBien peut être associé à plusieurs annonces.
20. TypeBien ↔ Annonce (N à 1)
   * Un type de bien peut être associé à plusieurs annonces.
   * Chaque annonce a un type de bien spécifique.

| Relation      | Cardinalité (1 à N) | Cardinalité (N à 1) |
| ----------- | ----------- | ----------- |
| Utilisateur ↔ Annonce      | 1 à N       | N à 1       |
| Annonce ↔ Photo   | 1 à N        | N à 1        |
| Utilisateur ↔ Favori   | 1 à N        | N à 1        |
| Utilisateur ↔ Commentaire   | 1 à N        | N à 1        |
| Annonce ↔ Commentaire   | 1 à N        | N à 1        |
| Commentaire ↔ Commentaire   | 1 à N (hiérarchie)        | N à 1 (réponse)        |
| Utilisateur ↔ Message   | 1 à N        | N à 1        |
| Annonce ↔ Message   | 1 à N (nullable)        | N à 1 (nullable)        |
| Annonce ↔ Localisation   | 1 à N        | N à 1        |
| Annonce ↔ Commentaire   | 1 à N        | N à 1        |
| Annonce ↔ TypeBien   | 1 à N       | N à 1        |