<?php


    class Fabricant{

        private $idFabricant;
        private $nameFabricant;
        
        public function __construct(int $idFabricant, string $nameFabricant){
            $this->setIdFabricant($idFabricant);
            $this->setNameFabricant($nameFabricant);
        }


//SETTERS

        public function setIdFabricant(int $idFabricant): void{
            $this->idFabricant  = $idFabricant;
        }

        public function setNameFabricant(int $nameFabricant): void{
            $this->nameFabricant = $nameFabricant;
        }

//GETTERS

        public function getIdFabricant(): int{
            return $this->idFabricant;
        }

        public function getNameFabricant(): string{
            return $this->nameFabricant;
        }


    }


?>