<?php
# CRUD (UPDATE) — Micro‑étapes guidées (PHP + PDO)
> Mise à jour d’un utilisateur avec les colonnes **id, nom, prenom, age, sexe**.  
> Objectif : afficher un formulaire pré‑rempli, puis enregistrer la modification en base **sans** gestion d’erreurs avancée ni sécurité supplémentaire autre que les requêtes préparées.

---

## 1) Préparer l’environnement
1. **Base de données**
   - Avoir une table `user` avec les colonnes : `id` (PK, INT, AUTO_INCREMENT), `nom` (VARCHAR), `prenom` (VARCHAR), `age` (INT), `sexe` (VARCHAR).
2. **Connexion PDO (`db.php`)**
   - Créer une instance `PDO` (ex. `new PDO($dsn, $user, $pass)`).
   - Activer le mode requêtes préparées via `PDO::prepare()` et exécuter avec `->execute([...])`.

**But de cette étape :** disposer d’un accès simple à la BDD via PDO.

---

## 2) Comprendre le flux d’UPDATE (vue d’ensemble)
1. **Depuis la liste** des utilisateurs (ex. `index.php`), l’utilisateur clique sur **Modifier** pour une ligne donnée.
2. **Page d’édition** (ex. `edit.php`) :
   - **Récupère l’`id`** de l’utilisateur ciblé (par `GET` _ou_ via un petit `POST` dédié).
   - **Charge la ligne** avec `SELECT ... WHERE id = ?` → `PDO::prepare()` + `->execute([$id])` + `->fetch()`.
   - **Affiche un formulaire** pré‑rempli avec les valeurs retournées.
3. **Soumission du formulaire** (ex. vers `update.php`, méthode `POST`) :
   - Récupérer `id`, `nom`, `prenom`, `age`, `sexe` depuis `$_POST`.
   - Exécuter `UPDATE user SET nom=?, prenom=?, age=?, sexe=? WHERE id=?` via `PDO::prepare()` + `->execute([...])`.
   - **Rediriger** (ex. `header('Location: index.php')`) pour revenir à la liste.

**But de cette étape :** visualiser la suite logique « liste → edit (form pré‑rempli) → update → redirection ».

---

## 3) Côté liste (`index.php`) — Lien ou bouton “Modifier”
1. **Afficher les lignes** (`SELECT * FROM user`) et boucler pour les rendre.
2. Pour chaque ligne : fournir une action **Modifier** qui transporte l’`id` vers la page d’édition.
   - Option A (**GET**) : lien vers `edit.php?id=...` (simple et courant).
   - Option B (**POST**) : petit formulaire avec un `<input type="hidden" name="id">` et un bouton **Modifier** (correspond à l’esprit de votre exemple).

**Méthodes à citer** : `PDO::query()` (pour lister simplement), `PDOStatement::fetchAll()`/`fetch()`.

---

## 4) Page d’édition (`edit.php`) — Charger et pré‑remplir
1. **Récupérer l’`id`** envoyé depuis la liste :
   - Si GET : lire `$_GET['id']`.
   - Si POST : lire `$_POST['id']` (comme dans votre exemple).
2. **Préparer et exécuter** un `SELECT * FROM user WHERE id = ?` :
   - `PDO::prepare($sql)` → `->execute([$id])` → `->fetch()`.
3. **Stocker la ligne** retournée (ex. `$user`) pour l’affichage.
4. **Construire le formulaire HTML** pré‑rempli :
   - Champ caché `id` (`<input type="hidden" name="id" value="<?= $user['id'] ?>">`).
   - Champs texte/number/select avec `value="<?= $user['col'] ?>"`.
   - `<form action="update.php" method="POST">` pour envoyer la mise à jour.

**But de cette étape :** afficher un formulaire déjà rempli à partir des données lues.

---

## 5) Traitement de mise à jour (`update.php`) — Exécuter l’UPDATE
1. **Lire la méthode** : vérifier `$_SERVER['REQUEST_METHOD'] === 'POST'`.
2. **Récupérer les champs** depuis `$_POST` : `id`, `nom`, `prenom`, `age`, `sexe`.
3. **Préparer la requête UPDATE** :
   - SQL : `UPDATE user SET nom = ?, prenom = ?, age = ?, sexe = ? WHERE id = ?`.
   - Appeler `PDO::prepare($sql)` puis `->execute([$nom, $prenom, $age, $sexe, $id])`.
4. **Rediriger** immédiatement après (ex. `header('Location: index.php'); exit;`) pour revenir à la liste et éviter la resoumission du formulaire.

**But de cette étape :** appliquer la modification en base et revenir à la page d’accueil de la liste.

---

## 6) Points d’implémentation à respecter (dans votre style minimal)
- **Fichiers impliqués** : `db.php` (connexion), `index.php` (liste), `edit.php` (formulaire pré‑rempli), `update.php` (traitement).
- **Connexion partagée** : inclure `require 'db.php';` en haut de chaque fichier qui accède à la BDD.
- **Requêtes préparées** : toujours `PDO::prepare()` + `->execute([...])` (vous l’avez déjà).
- **Formulaires** : `method="POST"` pour l’update, avec champ caché `id`.
- **Redirections** : `header('Location: ...')` juste après l’UPDATE.

---

## 7) Arborescence minimale
```
/crud-basique/
├─ db.php          ← Création de l’objet PDO
├─ index.php       ← Liste des users + lien/bouton “Modifier” (passe l’id)
├─ edit.php        ← Sélection par id + formulaire pré‑rempli
└─ update.php      ← Traitement POST + UPDATE + redirection
```

---

## 8) Résumé ultra‑rapide (checklist)
- [ ] Connexion PDO prête (`db.php`).
- [ ] La liste affiche les users et envoie **id** vers `edit.php`.
- [ ] `edit.php` : `SELECT ... WHERE id = ?` → `fetch()` → **inputs pré‑remplis**.
- [ ] `update.php` : lit `$_POST` → `UPDATE ... WHERE id = ?` (préparé) → **redirect**.
- [ ] Retester le cycle complet : liste → edit → update → retour liste (valeurs modifiées visibles).

?>