<?php 


class Client extends Personne{
        private array $locations=[];


        public function __construct(string $nom,string $email){
            parent::__construct($nom,$email);
        }


        public function ajouterLocation (Location $location):void{
             $this->locations[]= $location;
        }

        public function afficherLocations():void{
            
                foreach($this->locations as $location){
            
            echo $location->afficherLocation();

                }
        }

        public function getLocations (){
    return $this->locations;
        }

}