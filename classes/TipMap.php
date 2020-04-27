<?php
    class TipMap extends BaseMap{
        public function findAll($ofset=0, $limit=30){
            $res = $this->db->query("SELECT Номер_типа, Название FROM tip LIMIT $ofset, $limit");
            return $res->fetchAll(PDO::FETCH_OBJ);
        }
    
        public function count(){
            $res = $this->db->query("SELECT COUNT(*) AS cnt FROM tip");
            return $res->fetch(PDO::FETCH_OBJ)->cnt; 
        }

        public function save(Tip $tip){
             
                if ($tip->id == 0) {
                    return $this->insert($tip);
                } 
                else {
                     return $this->update($tip);
                }
            
            return false;
        }
        private function insert(Tip $tip){
            if ($this->db->exec("INSERT INTO tip(Номер_типа, Название) VALUES('$tip->nomer', '$tip->name')") == 1) {
                return true;
            }
        return false;
        }
    }
    