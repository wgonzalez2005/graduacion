<?php
class graduandosModel extends Model
{
    private static $b = [];
    public function __construct()
    {
        parent::__construct();
    }

    public function getGraduandos()
    {
        $items = [];

        try {
            $sql = 'call getGraduandos();';
            $query = $this->db->conectar()->prepare($sql);
            // $query->bindParam(':cobrador', $cobradorId);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOEception $e) {
            return [];
        }
    }

    public function getBuscarGraduandos($bus)
    {
        $items = [];

        try {
            $sql = 'call getBuscarGraduando(:bus);';
            $query = $this->db->conectar()->prepare($sql);
            $query->bindParam(':bus', $bus);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOEception $e) {
            return [];
        }
    }

    public function UpdateGraduandos($id)
    {
        $items = [];

        try {
            $sql = 'call UpdateEstado(:id);';
            $query = $this->db->conectar()->prepare($sql);
            $query->bindParam(':id', $id);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOEception $e) {
            return [];
        }
    }

    public function getGraduandosPresentes()
    {
        $items = [];

        try {
            $sql = 'call getGraduandoPresentes();';
            $query = $this->db->conectar()->prepare($sql);            
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOEception $e) {
            return [];
        }
    }

    public function getBuscarGraduandosPresentes($bus)
    {
        $items = [];

        try {
            $sql = 'call getBuscarGraduandoPresente(:bus);';
            $query = $this->db->conectar()->prepare($sql);
            $query->bindParam(':bus', $bus);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOEception $e) {
            return [];
        }
    }
    
    public function getGraduandosidFamilia($id)
    {
        $items = [];

        try {
            $sql = 'call getGraduandosIdFamilia(:id);';
            $query = $this->db->conectar()->prepare($sql); 
            $query->bindParam(':id', $id);           
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOEception $e) {
            return [];
        }
    }

    public function getGraduandosidOcupacion($id)
    {
        $items = [];

        try {
            $sql = 'call getGraduandosIdOcupacion(:id);';
            $query = $this->db->conectar()->prepare($sql);
            $query->bindParam(':id', $id);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOEception $e) {
            return [];
        }
    }
}
