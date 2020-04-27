<?php
    require_once 'autoload.php';
    if (isset($_POST['id'])) {
        $special = new Sotrydnik();
        $special->id = Helper::clearInt($_POST['id']);
        $special->nomer = Helper::clearString($_POST['nomer']);
        $special->familia = Helper::clearString($_POST['familia']);
        $special->ima = Helper::clearInt($_POST['ima']);
        $special->ochestvo = Helper::clearInt($_POST['ochestvo']);
        $special->datar = Helper::clearString($_POST['datar']);
        $special->pol = Helper::clearInt($_POST['pol']);
        $special->telefon = Helper::clearInt($_POST['telefon']);
        $special->polohenie = Helper::clearInt($_POST['polohenie']);
        $special->dol = Helper::clearInt($_POST['dol']);
        $special->kods = Helper::clearInt($_POST['kods']);
        if ((new SotrydnikMap())->save($special)) {
            header('Location: view-special.php?id='.$special->special_id);
        } else {
            if ($special->special_id) {
        header('Location: add-special.php?id='.$special->special_id);
            } else {
                header('Location: add-special.php');
            }
        }
    }
