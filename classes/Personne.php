<?php

abstract class Personne{
protected int $id;
protected string $nom;
protected string $email;
private static $cmpt=0;

public function __construct(string $nom,string $email){
    $this->nom =$nom;
    $this->email=$email;
    self::$cmpt++;
    $this->id =self::$cmpt;
}

public function getId():int{
    return $this->id;
}

public function getNom():string{
    return $this->nom;
}
public function getEmail():string{
    return $this->email;
}

public function setNom( string $nom):void{
    $this->nom=$nom;
}

public function setEmail( string $email):void{
    $this->email=$email;
}

}


?>