<?php
    class RacionMap extends BaseMap{
        public function findAll($ofset=0, $limit=30){
            $res1 = $this->db->query("SELECT Номер_рациона, Наименование, Список_продуктов, Номер_типа FROM racion LIMIT $ofset, $limit");
            return $res1->fetchAll(PDO::FETCH_OBJ);
        }
    
        public function count(){
            $res1 = $this->db->query("SELECT COUNT(*) AS cnt FROM racion");
            return $res1->fetch(PDO::FETCH_OBJ)->cnt; 
        }

        public function save(Racion $racion){
             
                if ($racion->id == 0) {
                    return $this->insert($racion);
                } 
                else {
                     return $this->update($racion);
                }
            
            return false;
        }
        private function insert(Racion $racion){
            if ($this->db->exec("INSERT INTO racion(Номер_рациона, Наименование, Список_продуктов, Номер_типа) VALUES('$racion->nomerRac', '$racion->naimenov', '$racion->spisok', '$racion->nomertipa')") == 1) {
                return true;
            }
        return false;
        }
    }
    