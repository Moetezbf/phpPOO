<?php
require_once 'universite.php';
require_once 'etudiant.php';

$universite = new Universite();

$etudiant1 = new Etudiant('Dupont', 'Jean', 20, 'Classe A');
$etudiant2 = new Etudiant('Durand', 'Marie', 22, 'Classe B');
$etudiant3 = new Etudiant('Martin', 'Paul', 21, 'Classe C');
$etudiant4 = new Etudiant('Petit', 'Sophie', 23, 'Classe D');

$universite->ajoutEtudiant($etudiant1);
$universite->ajoutEtudiant($etudiant2);
$universite->ajoutEtudiant($etudiant3);
$universite->ajoutEtudiant($etudiant4);

$universite->supprimerEtudiant(2);

$etudiant1_modifie = new Etudiant('Duc', 'Jean', 20, 'Classe A');
$universite->modifierEtudiant(1, $etudiant1_modifie);

$etudiants = $universite->afficherEtudiant();
foreach ($etudiants as $etudiant) {
    echo "ID: " . $etudiant['id'] . "<br>";
    echo "Nom: " . $etudiant['nom'] . "<br>";
    echo "Prénom: " . $etudiant['prenom'] . "<br>";
    echo "Âge: " . $etudiant['age'] . "<br>";
    echo "Classe: " . $etudiant['classe'] . "<br><br>";
}
?>
