<?php
require_once 'config.php';
require_once 'etudiant.php';

class Universite {
    private $pdo;

    public function __construct() {
        $config = new Config();
        $this->pdo = $config->getConnection();
    }

    public function ajoutEtudiant(Etudiant $etudiant) {
        $sql = "INSERT INTO Etudiant (nom, prenom, age, classe) VALUES (:nom, :prenom, :age, :classe)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':nom' => $etudiant->getNom(),
            ':prenom' => $etudiant->getPrenom(),
            ':age' => $etudiant->getAge(),
            ':classe' => $etudiant->getClasse()
        ]);
    }

    public function supprimerEtudiant($id) {
        $sql = "DELETE FROM Etudiant WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
    }

    public function modifierEtudiant($id, Etudiant $etudiant) {
        $sql = "UPDATE Etudiant SET nom = :nom, prenom = :prenom, age = :age, classe = :classe WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':id' => $id,
            ':nom' => $etudiant->getNom(),
            ':prenom' => $etudiant->getPrenom(),
            ':age' => $etudiant->getAge(),
            ':classe' => $etudiant->getClasse()
        ]);
    }

    public function afficherEtudiant() {
        $sql = "SELECT * FROM Etudiant";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
