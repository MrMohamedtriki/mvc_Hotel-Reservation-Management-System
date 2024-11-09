<?php

class SeasonModel {
    private $id;
    private $libelle;
    private $dateDebut;
    private $dateFin;
    private $prix;
    private $conn; 

    public function __construct($conn, $id = null, $libelle = null, $dateDebut = null, $dateFin = null, $prix = null) {
        $this->id = $id;
        $this->libelle = $libelle;
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
        $this->prix = $prix;
        $this->conn = $conn; 
    }

   

    public function getCurrentSeasonLabel($date) {
        $dateString = $date->format('Y-m-d');

        $query = "SELECT libelle_sai FROM saison WHERE '$dateString' BETWEEN  dat_deb_sai AND dat_fin_sai";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result['libelle_sai'];
    }
    
    public function getPriceByLabel($seasonLabel) {
        try {
            $query = "SELECT prix FROM saison WHERE libelle_sai = :seasonLabel";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':seasonLabel', $seasonLabel);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                return $result['prix'];
            } else {
                return null; 
            }
        } catch (Exception $e) {
            return null;
        }
    }
}

?>
