<?php
    class ZonaMap extends BaseMap{
        public function findAll($ofset=0, $limit=30){
            $res = $this->db->query("SELECT Код, Название, Характеристика FROM zona LIMIT $ofset, $limit");
            return $res->fetchAll(PDO::FETCH_OBJ);
        }
    
        public function count(){
            $res = $this->db->query("SELECT COUNT(*) AS cnt FROM zona");
            return $res->fetch(PDO::FETCH_OBJ)->cnt; 
        }

        public function save(Zona $zona){
             
                if ($tip->id == 0) {
                    return $this->insert($zona);
                } 
                else {
                     return $this->update($zona);
                }
            
            return false;
        }
        private function insert(Zona $zona){
            if ($this->db->exec("INSERT INTO zona(Код, Название, Характеристика) VALUES('$zona->kod', '$zona->name', '$zona->xar')") == 1) {
                return true;
            }
        return false;
        }
    }
    