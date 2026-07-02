<?php


class Location implements Payable{

private float $total;
private array $vehicules=[];
private int $nbr;
private static $cmpt=0;

public function ajouterVehicule(string $nom,float $prix):void{
    $vehicule= new Vehicule($nom,$prix);
    $this->vehicules[]=$vehicule;
    $this->calculerTotal();
    self::$cmpt++;
    $this->nbr=self::$cmpt;
}

public function calculerTotal():float {
    $total=0;
    foreach($this->vehicules as $vehicule){
        $total += $vehicule->getPrix();
    } 
    return $total;

}

public function getVehicules(){
    return $this->vehicules;
}


public function afficherLocation ():void {
    echo 'Location'.$this->nbr. '\n';
    foreach($this->vehicules as $vehicule){
        echo $vehicule->afficherVehicule();

    }
    $this->calculerTotal();

}






}