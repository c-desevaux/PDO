<?php

    require_once('DbSDBM.class.php');
    require_once('class/Fabricant.class.php');

    class FabricantMGR{

        
        public static function getListFabricants(){
            
            $connexion = DbSDBM::getConnexion();

            try {
             
                $sql = "SELECT * FROM fabricant";
                $request = $connexion->query($sql);
                $records = $request->fetchAll(PDO::FETCH_COLUMN, 1);

                //Affichage de la liste des fabricants

                if($records){
                   return $records;
                }

                $request->closeCursor();

            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }

        public static function getFabricantById(int $id){

            $connexion = DbSDBM::getConnexion();

            try {
             
                $sql = "SELECT * FROM fabricant WHERE id_fabricant= ?";
                $request = $connexion->prepare($sql);
                $request->execute(array($id));
                $record = $request->fetch(PDO::FETCH_ASSOC);

                //Affichage de la liste des fabricants

                $request->closeCursor();

                if($record){
                        return $record;             
                }

            } catch (PDOException $e) {
                die($e->getMessage());
            }

        }

        public static function getFabricantsByName(string $name){

            $connexion = DbSDBM::getConnexion();

            try {
                $sql = "SELECT * FROM fabricant WHERE nom_fabricant LIKE ? ";
                $request = $connexion->prepare($sql);
                $request->execute(array("%$name%"));
                $records = $request->fetchAll(PDO::FETCH_ASSOC);

                //Affichage de la liste des fabricants

                if($records){
                        return $records;             
                }

                $request->closeCursor();

            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }


        public static function addFabricant(string $name){

            $connexion = DbSDBM::getConnexion();

            try {

                $sql = "INSERT INTO fabricant (nom_fabricant) VALUES (?)";
                $request = $connexion->prepare($sql);
                $request->execute(array($name));
                $id = $connexion->lastInsertId();
                
                $request->closeCursor();

                return $id;

            } catch (PDOException $e) {
                die($e->getMessage());
            }

        }


        public static function deleteFabricantsByName(string $name){

            $connexion = DbSDBM::getConnexion();

            try {
                $sql = "DELETE FROM fabricant WHERE nom_fabricant = ?";
                $request = $connexion->prepare($sql);
                $request->execute(array($name));
                
                $request->closeCursor();

            } catch (PDOException $e) {
                die($e->getMessage());
            }

        }

        public static function deleteFabricantById(int $id){

            $connexion = DbSDBM::getConnexion();

            try {
                $sql = "DELETE FROM fabricant WHERE id_fabricant = ?";
                $request = $connexion->prepare($sql);
                $request->execute(array($id));
                
                $request->closeCursor();

            } catch (PDOException $e) {
                die($e->getMessage());
            }

        }

        public static function updateFabricantById($id, $name){

            $connexion = DbSDBM::getConnexion();

            try {
                $sql = "UPDATE fabricant SET nom_fabricant= ? WHERE id_fabricant = ?";
                $request = $connexion->prepare($sql);
                $request->execute(array($name, $id));
                
                $request->closeCursor();

            } catch (PDOException $e) {
                die($e->getMessage());
            }


        }


    }

    
    

?>