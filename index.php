<?php


// dans l'armée il y a soldats, lieutenants, general, superGeneral

//tout le monde à un nom, prenom, et matricule

//les soldats savant marcher en rang

//les lieutenants savent crier

//les generaux savent crier comme les lieutenants mais font un cri different

//les lieutenants savent conduire

//les generaux ont leur voiture perso

//les superGeneraux one une voiture plus jolie


// il existe une sirene qui peut sonner

abstract class Personne {


   protected string $prenom;

   private string $nom;

   private int $age;

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return int
     *
     * c'est un methode qui sert a récuperer l'age
     *
     *
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }


    public function disBonjour(){

        echo "Bonjour je m'appelle $this->prenom";
    }


}


class Etudiant extends Personne implements SavoirLire {



    public function allerEnCours(){

        echo "je m'appelle $this->prenom et je prends le bus pour aller en cours";
    }

    public function lire()
    {
        echo "je suis etudiant et je sais lire";
    }

}

class Prof extends Personne{

    public function donnerCours(){
        echo "faites l'exerice 14 page 24";
    }

}


interface SavoirLire{

    public function lire();

}

class MachineCafe {


    public static function faisUnCafe(){
        echo "déso je marche pas";
    }
}


MachineCafe::faisUnCafe();


$bernardo = new Etudiant();

$clara = new Prof();

$clara->setPrenom("clara");

$clara->donnerCours();
$clara->disBonjour();








