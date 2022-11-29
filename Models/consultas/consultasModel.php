<?php
class consultasModel extends Model
{

    private static $b = [];
    public function __construct()
    {
        parent::__construct();
      

    }

    public function getDatos()
    {
     
        $items = [];        
        try {
            $sql   = "call getGraduandos();";
            $query = $this->db->conectar()->prepare($sql);           
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOEception $e) {
            return [];
        }
   

    }

    public function UpdatePresente($id)
    {
    
            $items = [];
           
            try {
                $sql   = "call setPresente(:id);";
                $query = $this->db->conectar()->prepare($sql); 

                $query->bindParam(':id', $id);
                $query->execute();
                 
                $items[0]=$query->fetchAll(PDO::FETCH_ASSOC);
                $items[1]=$this->getDatos();
                return $items;

            } catch (PDOEception $e) {
                return [];
            }
    }

    public function getGraduandosId($id)
    {
    
            $items = [];
           
            try {
                $sql   = "call getGraduandoId(:id);";
                $query = $this->db->conectar()->prepare($sql);                 
                $query->bindParam(':id', $id);
                $query->execute();
                return $query->fetchAll(PDO::FETCH_ASSOC);


            } catch (PDOEception $e) {
                return [];
            }
        }

    public function BuscarGraduandos($bus)
    {
    
            $items = [];
           
            try {
                $sql   = "call getBuscarGraduando(:bus);";
                $query = $this->db->conectar()->prepare($sql);                 
                $query->bindParam(':bus', $bus);
                $query->execute();
                return $query->fetchAll(PDO::FETCH_ASSOC);


            } catch (PDOEception $e) {
                return [];
            }
        }
        
        /*ASISTENCIA */
        public function getDatosAsistencia()
        {
        
                $items = [];
               
                try {
                    $sql   = "call getGraduandoPresentes();";
                    $query = $this->db->conectar()->prepare($sql);                 
                    $query->execute();
                    return $query->fetchAll(PDO::FETCH_ASSOC);
    
    
                } catch (PDOEception $e) {
                    return [];
                }
            }
        

            public function BuscarGraduandosPresentes($bus)
            {
            
                    $items = [];
                   
                    try {
                        $sql   = "call getBuscarGraduandoPresente(:bus);";
                        $query = $this->db->conectar()->prepare($sql);                 
                        $query->bindParam(':bus', $bus);
                        $query->execute();
                        return $query->fetchAll(PDO::FETCH_ASSOC);
        
        
                    } catch (PDOEception $e) {
                        return [];
                    }
                }


                /*OCUPACION */

                public function getDatosOcupacion()
                {                
                        $items = [];
                       
                        try {
                            $sql   = "call getEstadisticasOcupacion();";
                            $query = $this->db->conectar()->prepare($sql);                 
                            $query->execute();
                            return $query->fetchAll(PDO::FETCH_ASSOC);           
                        } catch (PDOEception $e) {
                            return [];
                        }
                    }


                    public function getDatosOcupacionId($id)
                    {                    
                            $items = [];                           
                            try {
                                $sql   = "call getGraduandosIdOcupacion(:id);";
                                $query = $this->db->conectar()->prepare($sql);                 
                                $query->bindParam(':id', $id);
                                $query->execute();
                                return $query->fetchAll(PDO::FETCH_ASSOC);               
                            } catch (PDOEception $e) {
                                return [];
                            }
                    }

                    
                /*FAMILIAS */

                public function getDatosFamilias()
                {                
                        $items = [];
                       
                        try {
                            $sql   = "call getEstadisticasFamilias();";
                            $query = $this->db->conectar()->prepare($sql);                 
                            $query->execute();
                            return $query->fetchAll(PDO::FETCH_ASSOC);           
                        } catch (PDOEception $e) {
                            return [];
                        }
                    }


                    public function getDatosFamiliasId($id)
                    {                    
                            $items = [];                           
                            try {
                                $sql   = "call getGraduandosIdFamilia(:id);";
                                $query = $this->db->conectar()->prepare($sql);                 
                                $query->bindParam(':id', $id);
                                $query->execute();
                                return $query->fetchAll(PDO::FETCH_ASSOC);               
                            } catch (PDOEception $e) {
                                return [];
                            }
                    }
                  
                    

                    
        

}
