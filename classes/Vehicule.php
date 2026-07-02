<?php



class Vehicule{
private string $nom;
private float $prix;
private StatutVehicule $statut;


public function __construct(string $nom,float $prix){
    $this->nom =$nom;
    $this->prix=$prix;
    $this->statut= $this->calculStatut();
}


public function calculStatut():StatutVehicule{

if($this->prix >=100){
    return StatutVehicule::LUXE;
}
if($this->prix >=20){
    return StatutVehicule::CONFORT;
}
return StatutVehicule::ECO;

}

public function getStatut():StatutVehicule{
    return $this->statut;
}

public function getNom():string{
    return $this->nom;
}

public function getPrix():float{
    return $this->prix;
}


public function afficherVehicule():void{
    echo $this->nom . ':' . $this->prix .'(' . $this->statut->value .')\n';
}


}
?>