<?php
    class PitomecMap extends BaseMap{
        public function findAll($ofset=0, $limit=30){
            $res = $this->db->query("SELECT номер_питомца, Имя, Дата_рождения, Пол, Вид_млекопитающего, Зона_обитания, Номер_сотрудника, Номер_Типа_рациона, Код_сведения_животного  FROM pitomec LIMIT $ofset, $limit");
            return $res->fetchAll(PDO::FETCH_OBJ);
        }
    
        public function count(){
            $res = $this->db->query("SELECT COUNT(*) AS cnt FROM pitomec");
            return $res->fetch(PDO::FETCH_OBJ)->cnt; 
        }

        public function save(Pitomec $pitomec){
             
                if ($pitomec->id == 0) {
                    return $this->insert($pitomec);
                } 
                else {
                     return $this->update($pitomec);
                }
            
            return false;
        }
        private function insert(Pitomec $pitomec){
            if ($this->db->exec("INSERT INTO pitomec(Имя, Дата_рождения, Пол, Вид_млекопитающего, Зона_Обитания, Номер_сотрудника, Номер_Типа_рациона, Код_сведения_животного) VALUES('$pitomec->name', '$pitomec->name1', '$pitomec->name2', '$pitomec->name3', '$pitomec->name4', '$pitomec->name5', '$pitomec->name6', '$pitomec->name7')") == 1) {
                return true;
            }
        return false;
        }
    }
    