<?php
    class VidMap extends BaseMap{
        public function findAll($ofset=0, $limit=30){
            $res = $this->db->query("SELECT Наименование, Происхождение, Группа FROM vid LIMIT $ofset, $limit");
            return $res->fetchAll(PDO::FETCH_OBJ);
        }
    
        public function count(){
            $res = $this->db->query("SELECT COUNT(*) AS cnt FROM vid");
            return $res->fetch(PDO::FETCH_OBJ)->cnt; 
        }

        public function save(Vid $vid){
             
                if ($tip->id == 0) {
                    return $this->insert($vid);
                } 
                else {
                     return $this->update($tip);
                }
            
            return false;
        }
        private function insert(Vid $vid){
            if ($this->db->exec("INSERT INTO vid(Наименование, Происхождение, Группа) VALUES('$vid->name', '$vid->pro', '$vid->grupp')") == 1) {
                return true;
            }
        return false;
        }
    }
    