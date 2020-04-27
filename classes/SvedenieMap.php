<?php
    class SvedenieMap extends BaseMap{
        public function findAll($ofset=0, $limit=30){
            $res = $this->db->query("SELECT Код, Название_страны, Начало_улета, Конец_прилета, Температура FROM svedenie LIMIT $ofset, $limit");
            return $res->fetchAll(PDO::FETCH_OBJ);
        }
    
        public function count(){
            $res = $this->db->query("SELECT COUNT(*) AS cnt FROM svedenie");
            return $res->fetch(PDO::FETCH_OBJ)->cnt; 
        }

        public function save(Svedenie $svedenie){
             
                if ($sotrydnik->id == 0) {
                    return $this->insert($svedenie);
                } 
                else {
                     return $this->update($svedenie);
                }
            
            return false;
        }
        private function insert(Svedenie $svedenie){
            if ($this->db->exec("INSERT INTO svedenie(Код, Название_страны, Начало_улета, Конец_прилета, Температура) VALUES('$svedenie->kod', '$svedenie->strana', '$svedenie->ylet', '$svedenie->prilet', '$svedenie->temp')") == 1) {
                return true;
            }
        return false;
        }
    }
    