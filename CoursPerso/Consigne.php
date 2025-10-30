<?php
# CONSIGNE — Projet « Le Doigt du Père » (Travail de groupe)

> Objectif : réaliser un site MVC procédural (PHP + MySQL + Bootstrap) pour gérer un orphelinat avec gestion des utilisateurs, enfants et écoles, des sessions et des rôles.  
> Ce document décrit **la méthode de travail**, **les étapes techniques**, **les schémas**, et **les règles de contribution**.

---

## 1) Méthode de travail & maquette (Figma)

### 1.1. Organisation d’équipe
-  cadencer les sprints, valider les livrables.
-  maquettes Figma, guides visuels (couleurs, typos, composants).
-  intégration Bootstrap, accessibilité, responsive.
-  BDD, sécurité, sessions/roles, logique CRUD.
-  tests, relecture, validation PR.

### 1.2. Outils & workflow
- **Git + GitHub/GitLab** : 1 branche `main`, branches de feature `feat/…`, PR + review.
- **Issues & Kanban** : Trello/Jira/GitHub Projects — backlog, en cours, à valider, fait.
- **Conventions** :
  - Commits : `feat:`, `fix:`, `docs:`, `refactor:`, `style:`.
  - PHP : PSR-12 (indentation, nommage).
  - CSS : **Priorité Bootstrap**, CSS custom minimal dans `style.css`.
- **Réunions rapides** : daily 10 min — avancement, blocages, plan du jour.

### 1.3. Figma — livrables attendus
- **Wireframes** : Accueil, Login, Tableau des enfants, Formulaire enfant, Tableau écoles, Formulaire école, Tableau utilisateurs, Formulaire utilisateur, Graphiques.
- **Design system** : couleurs (sombre/glauque), typos (titre, texte), composants (navbar, cartes, formulaires, tableaux, pagination, toasts).
- **Prototype** : interactions simples (navigation principale, états hover, messages d’erreur).

---

## 2) Intégration front (HTML/CSS/Bootstrap)

### 2.1. Principes
- **Bootstrap 5 (CDN)**, composants natifs (navbar, cards, forms, tables, dropdowns, alerts).
- **CSS custom minimal** : uniquement pour thème “horreur glauque” et lisibilité.
- **Responsive first** : grilles `.container`, `.row`, `.col-*`, utilities `p-*, m-*`, `gap-*`.
- **Accessibilité** : `label` relié aux `input`, `aria-*` sur dropdowns, contrastes suffisants.

### 2.2. Pages
- **Layout** : `header.php` (CDN, navbar), `footer.php` (scripts), `style.css` (thème).
- **Pages** : `login.php`, `dashboard.php` (ou `index.php`), `children_*`, `schools_*`, `users_*`, `charts.php`.
- **Navigation** : liens **relatifs** + vérification `<base href="…">` si utilisée.

---

## 3) Base de données & schémas

### 🗃️ Schéma de données — Description détaillée

---

## 1️⃣ **Table `users` — Utilisateurs**

### 🧩 Champs
| Nom du champ | Type / Taille | Obligatoire | Description |
|---------------|----------------|--------------|--------------|
| `id` | entier auto-incrémenté | ✅ | Identifiant unique de l’utilisateur |
| `login` | chaîne (~60) | ✅ (unique) | Identifiant de connexion |
| `email` | chaîne (~120) | ✅ (unique) | Adresse e-mail |
| `password_hash` | chaîne (~255) | ✅ | Mot de passe chiffré (via `password_hash()` en PHP) |
| `role` | enum(`admin`, `user`) | ✅ (défaut `user`) | Rôle de l’utilisateur |
| `created_at` | timestamp | ✅ | Date/heure de création automatique |

### ⚙️ Contraintes & Règles
- `login` et `email` doivent être **uniques**.  
- `role` obligatoire et limité à `{admin, user}`.  
- Un **admin ne peut pas supprimer un autre admin**.  

### 🧱 Index
- Unicité sur `login`.  
- Unicité sur `email`.  

---

## 2️⃣ **Table `children` — Enfants**

### 🧩 Champs
| Nom du champ | Type / Taille | Obligatoire | Description |
|---------------|----------------|--------------|--------------|
| `id` | entier auto-incrémenté | ✅ | Identifiant unique |
| `last_name` | chaîne (~100) | ✅ | Nom de famille |
| `first_name` | chaîne (~100) | ✅ | Prénom |
| `birth_date` | date | ✅ | Date de naissance |
| `height_cm` | entier positif | ✅ | Taille en centimètres |
| `weight_kg` | décimal (5,2) | ✅ | Poids en kilogrammes |
| `sex` | enum(`M`, `F`, `Autre`) | ✅ | Sexe biologique |
| `arrival_date` | date | ✅ | Date d’arrivée à l’orphelinat |
| `memories_json` | texte JSON | ✅ | Souvenirs au format JSON (`[]` par défaut côté PHP) |
| `created_at` | timestamp | ✅ | Date/heure de création automatique |

### ⚙️ Contraintes & Règles
- `birth_date` et `arrival_date` doivent être **valides**.  
- `height_cm` > 0 et `weight_kg` > 0.  
- `sex` limité à {`M`, `F`, `Autre`}.  
- `memories_json` contient un **tableau JSON sérialisé** (géré côté PHP).  

### 🧱 Index
- (Optionnel) sur `last_name` et `first_name` pour la recherche.  
- (Optionnel) sur `arrival_date` pour filtrage chronologique.  

---

## 3️⃣ **Table `schools` — Écoles**

### 🧩 Champs
| Nom du champ | Type / Taille | Obligatoire | Description |
|---------------|----------------|--------------|--------------|
| `id` | entier auto-incrémenté | ✅ | Identifiant unique |
| `name` | chaîne (~150) | ✅ | Nom de l’école |
| `city` | chaîne (~100) | ✅ | Ville |
| `phone` | chaîne (~30) | ❌ | Numéro de téléphone |
| `email` | chaîne (~120) | ❌ | Adresse e-mail |
| `notes` | texte | ❌ | Remarques libres |
| `created_at` | timestamp | ✅ | Date/heure de création automatique |

### ⚙️ Contraintes & Règles
- `name` et `city` obligatoires.  
- Si `email` est renseigné → **doit être valide**.  

### 🧱 Index
- (Optionnel) sur `name`.  
- (Optionnel) sur `city`.  

---

## 4️⃣ **Table `child_school` — Relation Enfant ↔ École (Many-to-Many)**

### 🧩 Rôle
Permet de relier plusieurs **enfants** à plusieurs **écoles** (relation N:N).

### 🧩 Champs
| Nom du champ | Type | Obligatoire | Description |
|---------------|-------|--------------|--------------|
| `child_id` | entier | ✅ | Référence vers `children.id` |
| `school_id` | entier | ✅ | Référence vers `schools.id` |
| `since_date` | date | ❌ | Date d’entrée ou d’affectation |

### ⚙️ Clés & Contraintes
- **Clé primaire composite** : (`child_id`, `school_id`) — empêche les doublons.  
- **Clés étrangères** :
  - `child_id` → `children.id` → suppression **en cascade**.  
  - `school_id` → `schools.id` → suppression **en cascade**.  

### 🧱 Index
- Index implicite via la clé primaire composite.  

---

## ⚖️ Rappels métier — Gestion des rôles et accès

| Rôle / Action | Accès CRUD Utilisateurs | CRUD Enfants & Écoles | Suppression Admin |
|----------------|------------------------|------------------------|------------------|
| **Admin** | ✅ Complet | ✅ Complet | ❌ Interdit |
| **User** | ❌ Aucun | ✅ Complet | ❌ Interdit |
| **Non connecté** | ❌ Aucun | ❌ Aucun | ❌ Aucun |

### 🔐 Technique
- Contrôles via **sessions PHP** (`$_SESSION['user']`).  
- Fonctions d’accès :
  - `require_login()` → empêche l’accès si non connecté.  
  - `require_admin()` → bloque l’accès si rôle ≠ admin.  
- Les rôles déterminent les permissions :
  - **Admin** : gère tout sauf suppression d’admin.  
  - **User** : gère enfants et écoles uniquement.  
  - **Invité** : aucun accès CRUD.


## 4) CRUD — Exigences fonctionnelles & champs


### 4.1. Utilisateurs
- **Lister** : tableau (login, email, rôle, date), recherche simple.
- **Créer** : `login`, `email`, `password`, `role` (admin/user).
- **Lire** : fiche (sans afficher le hash !).
- **Mettre à jour** : email, mot de passe (optionnel), rôle.
- **Supprimer** : **réservé aux admins** ; **impossible** de supprimer un autre **admin** (règle métier).
- **Contraintes** : 
  - `login` unique, `email` unique, `password` min 10 caractères, `role` ∈ {admin,user}.
  - Validation serveur + messages d’erreur Bootstrap.

### 4.2. Enfants
- **Lister** : tableau (Nom, Prénom, Naissance, Âge, Taille, Poids, Sexe, Arrivée, Souvenirs).
- **Créer** : `last_name`, `first_name`, `birth_date`, `height_cm`, `weight_kg`, `sex`, `arrival_date`, `memories[]` → JSON.
- **Lire** : fiche enfant, éventuel lien écoles associées.
- **Mettre à jour** : tous champs (optionnel).
- **Supprimer** : **autorisée** par **tous les utilisateurs connectés (admin et user)**.
- **Contraintes** : dates format `YYYY-MM-DD`, tailles entières positives, poids décimal, `sex` ∈ {M,F,Autre}.

### 4.3. Écoles
- **Lister** : tableau (Nom, Ville, Téléphone, Email, Notes).
- **Créer** : `name`, `city`, `phone?`, `email?`, `notes?`.
- **Lire** : fiche école, liste des enfants liés (si table relation).
- **Mettre à jour** : champs ci-dessus.
- **Supprimer** : **autorisée** par **tous les utilisateurs connectés (admin et user)**.
- **Contraintes** : email valide si fourni, téléphone facultatif (format libre).

---

## 5) Sessions, rôles & compartimentalisation

### 5.1. Connexion / Déconnexion
- **login.php (POST)** : vérifie `login/email` + `password` via `password_verify()`.
- Si OK → `$_SESSION['user'] = [id, login, role];` puis redirection dashboard.
- **logout.php** : `session_destroy()` + suppression cookie + redirection `index.php`.

### 5.2. Middleware procédural (helpers)
- `require_login()` : redirige vers `login.php` si `$_SESSION['user']` vide.
- `require_admin()` : redirige 403 si `$_SESSION['user']['role'] !== 'admin'`.

### 5.3. Matrice des permissions
| Action | Non connecté | User | Admin |
|---|---:|---:|---:|
| Voir listes (enfants, écoles) | ❌ | ✅ | ✅ |
| Créer / Modifier enfants, écoles | ❌ | ✅ | ✅ |
| Supprimer enfants, écoles | ❌ | ✅ | ✅ |
| Voir liste utilisateurs | ❌ | ❌ | ✅ |
| Créer / Modifier utilisateurs | ❌ | ❌ | ✅ |
| Supprimer utilisateur | ❌ | ❌ | ✅ (⚠️ pas d’admin) |
| Supprimer un **admin** | ❌ | ❌ | ❌ (interdit) |

### 5.4. Règles techniques
- Avant **DELETE user** : vérifier `target.role !== 'admin'`.  
- Les écrans `/users/*` protégés par `require_admin()`.
- Les écrans `/children/*` et `/schools/*` protégés par `require_login()`.

---

## 6) Structure des fichiers (rappel)

```
public/
  index.php            # routeur procédural
  assets/css/style.css
  assets/js/app.js
app/
  includes/
    header.php footer.php db.php helpers.php
  pages/
    login.php logout.php dashboard.php
    users_{list,create,edit}.php
    children_{list,create,edit}.php
    schools_{list,create,edit}.php
    charts.php
sql/
  schema.sql insert_children.sql
config.php
```

---

## 7) Qualité, sécurité, tests

- **Validation serveur** + messages d’erreur (Bootstrap `.is-invalid`).
- **Échapper** toutes les sorties : `e($str)` (htmlspecialchars).
- **PDO préparé** partout (`$pdo->prepare(...)` + `execute`).
- **CSRF (bonus)** : token simple sur formulaires sensibles.
- **Mots de passe** : `password_hash()` / `password_verify()`, jamais en clair.
- **Tests** : 
  - CRUD : création, lecture, mise à jour, suppression pour chaque entité.
  - Sessions : accès interdit ⇒ redirection, rôle admin ⇒ accès autorisé.
  - Données : contraintes (dates, tailles, poids).

---

## 8) Déploiement & livrables

- **Livrables** : 
  - Maquettes Figma (lien + exports), 
  - Projet PHP (dossier `public` en racine web), 
  - SQL (`schema.sql`, `insert_children.sql`),
  - Ce fichier `consigne.md`,
  - Un `README.md` minimal (installation, configuration, comptes de test).
- **Déploiement local** : WAMP/XAMPP/MAMP, base `orphelinat`, `.env`/`config.php` ajusté.
- **Démo** : capture vidéo ou hébergement gratuit (InfinityFree/000webhost) si possible.

---

## 9) Checklist

- [ ] Maquettes Figma validées (pages clés + design system)
- [ ] Schéma BDD créé (users, children, schools, relations)
- [ ] Intégration Bootstrap (navbar, tables, forms)
- [ ] CRUD Users (admin only)
- [ ] CRUD Children & Schools (user/admin)
- [ ] Sessions & rôles (redirections OK)
- [ ] Graphiques Chart.js (tailles, poids, âges)
- [ ] Tests & corrections
- [ ] Zippage livrable + README

Bon courage, l’équipe — et que les ténèbres vous rendent… productifs. 🩸 *

?>