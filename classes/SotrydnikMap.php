<?php
    class SotrydnikMap extends BaseMap{
        public function findAll($ofset=0, $limit=30){
            $res = $this->db->query("SELECT Номер, Фамилия, Имя, Отчество, Дата_рождения, Пол, Телефон, Семейное_положение, Должность, Код_супруга FROM sotrydnik LIMIT $ofset, $limit");
            return $res->fetchAll(PDO::FETCH_OBJ);
        }
    
        public function count(){
            $res = $this->db->query("SELECT COUNT(*) AS cnt FROM sotrydnik");
            return $res->fetch(PDO::FETCH_OBJ)->cnt; 
        }

        public function save(Sotrydnik $sotrydnik){
             
                if ($sotrydnik->id == 0) {
                    return $this->insert($sotrydnik);
                } 
                else {
                     return $this->update($sotrydnik);
                }
            
            return false;
        }
        private function insert(Sotrydnik $sotrydnik){
            if ($this->db->exec("INSERT INTO sotrydnik(Номер, Фамилия, Имя, Отчество, Дата_рождения, Пол, Телефон, Семейное_положение, Должность, Код_супруга) VALUES('$sotrydnik->nomer', '$sotrydnik->familia', '$sotrydnik->ima', '$sotrydnik->ochestvo', '$sotrydnik->datar', '$sotrydnik->pol', '$sotrydnik->telefon', '$sotrydnik->polohenie', '$sotrydnik->dol', '$sotrydnik->kods')") == 1) {
                return true;
            }
        return false;
        }
    }
    