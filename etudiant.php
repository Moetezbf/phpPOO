<?php
require_once 'personne.php';

class Etudiant extends Personne {
    private $classe;

    public function __construct($nom, $prenom, $age, $classe) {
        parent::__construct($nom, $prenom, $age);
        $this->classe = $classe;
    }

    public function getClasse() {
        return $this->classe;
    }
}
?>
