<?php
class inicioModel extends Model
{

    private static $b = [];
    public function __construct()
    {
        parent::__construct();
       
    }

    public function getOcupacion()
    {
     
        $items = [];
   
        try {
            $sql   = "call getEstadisticasOcupacion();";
            $query = $this->db->conectar()->prepare($sql);
            // $query->bindParam(':cobrador', $cobradorId);       
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOEception $e) {
            return [];
        }
    }

    public function getFamilia()
    {
        
            $items = [];
  
            try {
                $sql   = "call getEstadisticasFamilias();";
                $query = $this->db->conectar()->prepare($sql); 
                // $query->bindParam(':cobrador', $cobradorId);
                // $query->bindParam(':bus', $bus);
                $query->execute();
                return $query->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOEception $e) {
                return [];
            }
   }

}
